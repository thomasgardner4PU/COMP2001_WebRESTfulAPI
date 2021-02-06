using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001_WebRESTfulAPI.Models
{
    public partial class Password
    {
        public int PasswordId { get; set; }
        public string Pass { get; set; }
        public DateTime datechanged { get; set; }

        public virtual User PasswordNavigation { get; set; }
    }
}

