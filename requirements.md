## Functional:
1. User groups:
- Admin
- Registered users
- Guests

system:
3. Authentication system: 
  - company (reg, login, logout) + admin (login -> control panel)
  - Forget account
4. Job listings: display list of available job -> click: full desc
5. Job post storage:
6. Resume storage for agency
8. Privacy protection: 
- applicants able to view job desc, cannot view employer contact
- application send to system, not directly to employer
  
Applicant
7. Application submission: form + upload resume (pdf) -> system store 
8. Download job post

Employer
10. Job position detail: job description (deadline, location,...)
11. Document upload: upload job desc pdf

Admin
12. Admin Features: add new job positions manually
6. Job post approval: approve or EDIT job posts by employers

## Non-functional:


## Design

Home
Authenticate: register, sign in
For Guest:
- View job listing + button -> click: detail -> view company profile
- Button for application -> form (fullname, phone, email, resume upload button)
    - pop up ensure success or fail (all field filled, valid email)
    - system store application
- pop back view job listing
- allow multiple submission -> store the last submission of the same email, same postid
   - based on email, if the submission already checked, not allow resubmission
- close window

For Company:
- Register:
  - form () -> success -> (tutorial) -> dashboard
- Dashboard:
    - view job listing (without submit) -> display applicants number, number of verified
                 - view applications button -> list of verified (link to application) - view full application | add to candidate list
                                                   - remain in page / return to           - return 
                 - edit job post button -> form
                                            - check valid
                                            - pop up are you sure?
                                            - success -> dashboard
    - Button add job -> click: form (position ID, title, job desciprtion (upload/text), required degrees(options/text), desired skills (options/text), deadline, location, candidate amount)   
                          - check valid
                          - pop up are you sure?
                          - success -> dashboard (pending)
    - approved post, pending post, unapproved post (filter, sort)
- Noti button (traffic light)
  - Green noti: approved
  - Yellow noti: number of new applicants
  - Red noti: unapproved
- Profile:
  - view, edit
For Admin:


