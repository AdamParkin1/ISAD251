using System;
using System.Collections.Generic;

namespace unit8isadattempt2
{
    public partial class Products
    {
        public int ProductId { get; set; }
        public string ProductDetails { get; set; }
        public double Price { get; set; }
        public int Quantity { get; set; }
        public int? MinStock { get; set; }
    }
}
