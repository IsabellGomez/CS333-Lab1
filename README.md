# cs333-lab1
Do each step below and answer the questions as you go.

1. Do you have your simple apache website already set up? 
2. What is your URL? Please provide it here.
3. As always, you can do the minimum, or you can go further than the assignment and embellish your work- highly encouraged.
4. Put these two html files included in this lab1 repo in your local site. View them with live preview, and make sure they are visible locally.
5. Link these two files to your index.html page, both ways so I can go to all pages from each page via hyperlinks.
6. Test all of this locally.
7. However you have your SFTP set up, upload the pages to your site, and fill out information in the forms.html and hit submit
8. Do you see results in the submit.html file? Why or why not? Do you see results in the URL bar? Why does this happen?
9. Describe in a few sentences how the html form works.
10. What do GET and POST mean in this context?
11. What would we need to do to make the submit.html page display what was filled out in the form?
12. Add code to make the submit page display the form information, then upload it and check that it works.
    HINT: our server runs **PHP**, so make the page a PHP page:
    - Rename `submit.html` to `submit.php`, and point the form's `action` at `submit.php`.
    - In `submit.php`, read the submitted values with PHP — e.g. `$_GET['name']` (or
      `$_POST['name']` if you switch the form's method to POST) — and echo them into the page.
    - Wrap each value in `htmlspecialchars(...)` before you echo it, so no one can inject
      HTML or script through the form. Why does that matter?
13. Describe what a static HTML site is, the limitations of this type of site
14. What kind of non-static site would we need to be able to store the form information? Give an example of a configuration that will enable a form to accept data and store it persistently.

15. Push this to GitHub.
16. Submit in Moodle two links: (1) your GitHub repo, and (2) your live site showing the working form. Labs are submitted in Moodle every week — that is how I receive your work.
