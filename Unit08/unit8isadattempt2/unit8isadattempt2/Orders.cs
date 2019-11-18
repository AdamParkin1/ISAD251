using System;
using System.Collections.Generic;

namespace unit8isadattempt2
{
    public partial class Orders
    {
        public int OrderId { get; set; }
        public DateTime OrderDate { get; set; }
        public int CustomerId { get; set; }

        public virtual Customers Customer { get; set; }
    }
}
