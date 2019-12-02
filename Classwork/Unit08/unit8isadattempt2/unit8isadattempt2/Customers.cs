using System;
using System.Collections.Generic;

namespace unit8isadattempt2
{
    public partial class Customers
    {
        public Customers()
        {
            Orders = new HashSet<Orders>();
        }

        public int CustomerId { get; set; }

        public virtual ICollection<Orders> Orders { get; set; }
    }
}
