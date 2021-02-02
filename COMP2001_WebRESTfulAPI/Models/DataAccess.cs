using System;
using Microsoft.Data.SqlClient;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace COMP2001_WebRESTfulAPI.Models
{
    public partial class DataAccess : DbContext
    {
        public DataAccess()
        {
        }

        public DataAccess(DbContextOptions<DataAccess> options)
            : base(options)
        {
        }

        public virtual DbSet<Password> Passwords { get; set; }
        public virtual DbSet<Session> Sessions { get; set; }
        public virtual DbSet<User> Users { get; set; }

//        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
//        {
//            if (!optionsBuilder.IsConfigured)
//            {
//#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
//                optionsBuilder.UseSqlServer("Server=socem1.uopnet.plymouth.ac.uk;Database=COMP2001_TGardner;User Id=TGardner;Password=OgpB972*");
//            }
//        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.HasAnnotation("Relational:Collation", "Latin1_General_CI_AS");

            modelBuilder.Entity<Password>(entity =>
            {
                entity.HasNoKey();

                entity.Property(e => e.LoginTime).HasColumnType("datetime");

                entity.Property(e => e.Pass)
                    .HasMaxLength(100)
                    .IsUnicode(false)
                    .HasColumnName("pass");

                entity.Property(e => e.PasswordId).HasColumnName("PasswordID");

                entity.HasOne(d => d.PasswordNavigation)
                    .WithMany()
                    .HasForeignKey(d => d.PasswordId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("Fk1_UserID");
            });

            modelBuilder.Entity<Session>(entity =>
            {
                entity.HasNoKey();

                entity.Property(e => e.SessionId).HasColumnName("SessionID");

                entity.Property(e => e.SessionTime).HasColumnType("datetime");

                entity.HasOne(d => d.SessionNavigation)
                    .WithMany()
                    .HasForeignKey(d => d.SessionId)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("Fk2_UserID");
            });

            modelBuilder.Entity<User>(entity =>
            {
                entity.Property(e => e.UserId).HasColumnName("UserID");

                entity.Property(e => e.Password)
                    .IsRequired()
                    .HasMaxLength(100)
                    .IsUnicode(false);

                entity.Property(e => e.Email)
                    .IsRequired()
                    .HasMaxLength(50)
                    .IsUnicode(false);

                entity.Property(e => e.FirstName)
                    .IsRequired()
                    .HasMaxLength(50)
                    .IsUnicode(false);

                entity.Property(e => e.LastName)
                    .IsRequired()
                    .HasMaxLength(50)
                    .IsUnicode(false);
            });

            OnModelCreatingPartial(modelBuilder);
        }

        public bool Validate(User user)
        {
            Database.ExecuteSqlRaw("EXEC ValidateUser @Email, @Password",
                new SqlParameter("@Email", user.Email),
                new SqlParameter("@Password", user.Password));
            return true;
        }
        public void Register(User user, out string OUTPUT)
        {

            SqlParameter parameter = new SqlParameter();
            parameter.ParameterName = "@ResponceMessage";
            parameter.IsNullable = true;
            parameter.SqlDbType = System.Data.SqlDbType.VarChar;
            parameter.Direction = System.Data.ParameterDirection.Output;
            parameter.Size = 50;

            Database.ExecuteSqlRaw("EXEC RegisterUser @FirstName, @LastName, @Email, @CurrentPassword, @ResponceMessage",
                 new SqlParameter("@FirstName", user.FirstName),
                 new SqlParameter("@LastName", user.LastName),
                 new SqlParameter("@Email", user.Email),
                 new SqlParameter("@CurrentPassword", user.Password.ToString()),
                  parameter);

            OUTPUT = parameter.Value.ToString();

        }

        public void Update(User user, int User)
        {
            Database.ExecuteSqlRaw("EXEC UpdateUser @FirstName, @LastName, @Email, @Password, @UserID",
                new SqlParameter("@FirstName", user.FirstName),
                new SqlParameter("@LastName", user.LastName),
                new SqlParameter("@Email", user.Email),
                new SqlParameter("@Password", user.Password),
                new SqlParameter("@UserID", user.UserId));
        }

        public void Delete(int User)
        {
            Database.ExecuteSqlRaw("EXEC DeleteUser @userID",
                new SqlParameter("@UserID", User));
        }


        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
