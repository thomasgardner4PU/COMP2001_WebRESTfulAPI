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
    [Route("api/user")]

    public class UsersController : ControllerBase
    {

        private readonly DataAccess _context;

        public UsersController(DataAccess context)
        {
            _context = context;
        }

        // GET: api/Users
        [HttpGet("{id}")]
        public async Task<IActionResult> Get(User user)
        {

            bool p1 = getValidation(user);

            if (p1)
            {
                return Ok(true);
            }
            else
            {
                return StatusCode(208);
            }
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
        public async Task<IActionResult> Post(User user)
        {
            string Responce;

            register(user, out Responce);

            if (Responce.Contains("200"))
            {
                return Ok(user);
            }
            else
            {
                return StatusCode(208);
            }
        }

        // DELETE: api/Users/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Delete(int id)
        {
            _context.Delete(id);
            return StatusCode(200);
        }

        [NonAction]
        public void register(User user, out string Register)
        {
            string outputRegitser;
            _context.Register(user, out outputRegitser);

            Register = outputRegitser;
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