# cs333-lab1
Do each step below, and **answer the questions right here in this `README.md` file** as you go (type your answers under each question).

**How this lab works (two things to hand in):**
- **Your code:** make your own copy of this lab (click **Use this template**, or clone it),
  do your work, and **push it to your own GitHub repo** so I can see your code.
- **Your live form:** **SFTP the form pages to your web folder on `lampforall`** so the form
  actually runs on the LAMP stack.

You'll submit links to both in Moodle (see the last step).

1. Do you have your simple apache website already set up? 

Yes, my website is set up

2. What is your URL? Provide it here — and practice writing it as a proper **Markdown link** in this file, e.g. `[my site](https://lampforall.cis251296.projects.jetstream-cloud.org/students/yourname)`, not just pasted plain text. (Good Markdown practice for your README.)

[my site](https://lampforall.cis251296.projects.jetstream-cloud.org/students/isabell/)

3. As always, you can do the minimum, or you can go further than the assignment and embellish your work- highly encouraged.

4. Put these two html files included in this lab1 repo in your local site. View them with live preview, and make sure they are visible locally.

5. Link these two files to your index.html page, both ways so I can go to all pages from each page via hyperlinks.

6. Test all of this locally.

7. However you have your SFTP set up, upload the pages to your site, and fill out information in the forms.html and hit submit

8. Do you see results in the submit.html file? Why or why not? Do you see results in the URL bar? Why does this happen?

[results]http://127.0.0.1:5500/submit.html?name=Isabell+Gomez&email=test%40gmail.com&message=This+is+a+test
No, the submitted information does not appear on the page because there is no code connecting the results to the html page. Yes, the results appear in the URL bar because the form uses the GET method. GET adds the submitted form information to the URL.

9. Describe in a few sentences how the html form works.

Forms collect user input and the browser send the information to whatever is connected to the form's result, then method="GET" determines how the information is sent

10. What do GET and POST mean in this context?

GET is useful when the information doesn't need to be private and you want the request to be represented in the URL

With POST, the form information is sent in the body of the HTTP request instead of being put in the URL.

11. What would we need to do to make the submit.html page display what was filled out in the form?

The submit page needs code like PHP to read the values sent by the form and display them on the page. Static HTML alone cannot read the submitted GET or POST values.

12. Add code to make the submit page display the form information, then upload it and check that it works.
    HINT: our server runs **PHP**, so make the page a PHP page:
    - Rename `submit.html` to `submit.php`, and point the form's `action` at `submit.php`.
    - In `submit.php`, read the submitted values with PHP — e.g. `$_GET['name']` (or
      `$_POST['name']` if you switch the form's method to POST) — and echo them into the page.
    - Wrap each value in `htmlspecialchars(...)` before you echo it, so no one can inject
      HTML or script through the form. Why does that matter?
    - NOTE: PHP only runs on the **server** — VS Code Live Server / local preview will NOT
      execute it (you'll just see nothing or raw code). Test your `.php` by uploading it and
      opening the page at your `.../students/yourname/` URL.

      [answer]I renamed submit.html to submit.php and changed the form action to submit.php. I used PHP to read the submitted information with $_GET and displayed the name, email, and message on the page.

13. Describe what a static HTML site is, the limitations of this type of site

A static HTML site is a website where the server sends the same HTML files to visitors without changing the content based on their input.

14. What kind of non-static site would we need to be able to store the form information? Give an example of a configuration that will enable a form to accept data and store it persistently.

We would need a dynamic website with server-side code and a database to store the information like a LAMP setup using Linux, Apache, PHP, and MySQL or MariaDB could accept the form data and store it in a database.

15. Push this repo — the lab **files** and this **README.md** (with your answers filled in) — to **your own GitHub repo**.
16. Submit in Moodle two links: (1) your GitHub repo, and (2) your live site showing the working form. Labs are submitted in Moodle every week — that is how I receive your work.
