using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebApplication_test.Models
{
    public class Customer
    {
        private int CustomerID;
        public int getCustomerID()
        {
            return CustomerID;
        }
        public void setCustomerID(int newID)
        {
            CustomerID = newID;
        }
    }
}
