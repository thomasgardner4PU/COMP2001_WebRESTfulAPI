using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using COMP2001_WebRESTfulAPI.Models;

namespace COMP2001_WebRESTfulAPI.Controllers
{
        [ApiController]
    [Route("api/[controller]")]

    public class UsersController : ControllerBase
    {

        private readonly DataAccess _context;

        public UsersController(DataAccess context)
        {
            _context = context;
        }

        // GET: api/Users
        [HttpGet("{id}")]
    public async Task<IActionResult> Getuser(User user)
        {
            _context.Validate(user);

            return StatusCode(200);
        }

        // PUT: api/Users/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> Update(int id, User user)
        {
            _context.Update(user, id);

            return StatusCode(200);
        }

        // POST: api/Users
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<IActionResult> Post(User user, string output)
        {
            string register = "";

            _context.Register(user, out register);
            int usertest = Int32.Parse(register);

            if (usertest >= 1)
            {
                return StatusCode(200);
            }
            else
            {
                return StatusCode(404);
            }
        }

        // DELETE: api/Users/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Delete(int id)
        {
            _context.Delete(id);
            return StatusCode(200);
        }

        public void register(User user, out string Register)
        {
            _context.Register(user, out Register);
        }

        public bool getValidation(User user)
        {
            return _context.Validate(user);
        }


        private bool UserExists(int id)
        {
            return _context.Users.Any(e => e.UserId == id);
        }
    }
}