using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.Data.SqlClient;
using System.Data;

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

        public bool ValidateUser(User user)
        {
            Database.ExecuteSqlRaw("EXEC Validate @Email, @Password",
                new SqlParameter("@Email", user.Email),
                new SqlParameter("@Password", user.CurrentPassword));
            return true;
        }
        public void RegisterUser(User user, string OUTPUT)
        {
            SqlParameter response = new SqlParameter("@ResponseMessage", SqlDbType.VarChar, 128);
            response.Direction = ParameterDirection.Output;

            Database.ExecuteSqlRaw("EXEC RegisterUser @FirstName, @LastName, @Email, @CurrentPassword, @ResponceMessage",
                 new SqlParameter("@FirstName", user.FirstName),
                 new SqlParameter("@LastName", user.LastName),
                 new SqlParameter("@Email", user.Email),
                 new SqlParameter("@CurrentPassword", user.CurrentPassword.ToString()),
                  response);
        }

        public void UpdateUser(User user, int User)
        {
            Database.ExecuteSqlRaw("EXEC UpdateUser @FirstName, @LastName, @Email, @Password, @UserID",
                new SqlParameter("@FirstName", user.FirstName),
                new SqlParameter("@LastName", user.LastName),
                new SqlParameter("@Email", user.Email),
                new SqlParameter("@Password", user.CurrentPassword),
                new SqlParameter("@UserID", user.UserId));
        }

        public void DeleteUser(int User)
        {
            Database.ExecuteSqlRaw("EXEC DeleteUser @userID",
                new SqlParameter("@UserID", User));
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}