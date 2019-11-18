using System;
using System.Collections.Generic;

namespace unit8isadattempt2
{
    public partial class OrderDetails
    {
        public int OrderId { get; set; }
        public int ProductId { get; set; }
        public int Quantity { get; set; }
        public decimal? LineTotal { get; set; }
    }
}
