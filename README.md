# AssessmentAns
Submission for a company's intake assessment

## Thought Process

*A few things to note:-
- Server management is a new venture for me.
- I am learning PHP for one of this semester's assignment (developing a website). What I have learned thus far involves setting up a database on the localhost, hence I have decided to set up the config using PDO.
    - However, I have yet to learn the intricacies of setting up a web server, one of the domains of knowledge I intend to discover more with this (possible) internship.
- Composer is a completely new term I have just learned upon viewing the assessment. I have decided to explore more about the dependency manager as I tackle this assessment. The end result is my first attempt at using it.
    - One thing I've noticed is that Composer is capable of managing dependencies (packages obtained through Packagist) in a very efficient manner — a feature which I am unfortunately unable to implement in this assessment.
- I've decided to go for an abstract instead of an interface, since I've noticed that the Plans are designed to be in a hierarchical manner (Basic<Pro<Business). The superior plans will have all the variables and methods of the inferior ones, with several new additions (can be extended).

### Upon viewing the question and reading the code
- The first thing I've decided to do was to explore more about Composer and autoloading.
- Along the way I also searched up possible file/folder architecture and found out about the PSR format, I then decided to go with the PSR-4 autoloading, since using namespaces is also one of the expected procedures.
- I've renamed the original .php file to index.php, since I plan to later test run the project using xampp.

### Setting up the classes
- Next, I re-read the code and gathered all the necessary classes required for the code to run (User, Server, BasicPlan, ProPlan, BusinessPlan).
- Because BasicPlan, ProPlan, and BusinessPlan can be abstracted into a superclass Plan, I've decided to do so.
- Once that was done, I've added all the properties in the classes according to the ones used in the code.
    - Because the setter and getter methods are not used in the example, I've opted out from using those methods and made the properties public.
- Then, I worked my way through the functions, starting with the Plan class along with its child classes.
    - For the servers I went with a number to be set as the limit and then compared to whenever a new server attempts to connect.
    - There was also another alternative that I considered, which is to create an "$isSet" boolean property that is only present in the Basic Plan (only the aforementioned plan is limited to one server). However, I find it would make the rest of the code a bit lengthier in my opinion.
- For the user class, along with the two properties used in the example code, a $runningServer property is also added which can be used to make sure only one server is running for basic plan users.

### Running the code
- Once all was completed, I ran the php code using xampp (which was completely unnecessary, but since I already have it installed and ready for my course assignment, I believe it was easier for me to do so)
- I did a bit of fixing and troubleshooting before finally giving particular attention to the newlines to make sure that the source output would look nice.

The rest I believe are pretty self-explanatory in the code. Hope the code is to your liking. :smile:
