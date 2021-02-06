using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001_WebRESTfulAPI.Models
{
    public partial class Session
    {
        public int SessionId { get; set; }
        public DateTime SessionTime { get; set; }

        public virtual User SessionNavigation { get; set; }
    }
}
