🙌 Contributions

##Gautam Suthar

Refactored and restructured the full project
Implemented backend authentication and session management
Improved UI for Job Categories, Applications, Reports, and Profiles
Enhanced SQL scripts and relational mappings
Bug fixes and performance optimizations


##Bhargav Bhuddh

Assisted in project setup and testing
UI refinements and layout fixes
Helped in debugging and validations

##Shubh Ravat

Worked on SQL queries and schema design
Supported integration of user features
Helped implement additional features and session handling

📄 Report Contents
The following items are included in the report folder:

E/R Diagram
Relational Database Schema
Normalization Process
SQL Queries with 5 sample result tuples each


##For Web Application-related code:

SQL Declarations: sql-declarations/
Relation Instances: sql-declarations/1-tables.sql
Entity Access Scripts: web-application/model/
Each PHP file represents a DB entity and provides data access functions.

💡 Project Design Notes
"Categories" renamed to "Plans" – to better reflect the job pricing tiers: Basic, Prime, Gold.
Employer Category – interpreted as the industry type (e.g. IT, Marketing, etc.).
Job Categories as Tags – jobs can be tagged freely by the employer (like hashtags).
Administrators have no payment method – since they’re only system overseers.
Users can manage themselves – employees can register, update, and delete their own accounts.
Employer contact info – displayed via a button in job postings for easy access.

🌟 Additional Features:

🔒 Auto Logout: Users are automatically logged out after 30 minutes of inactivity.
📊 Role-based Dashboards: Each user (Admin, Employee, Employer) sees tailored content.
🧭 Navigation Tabs: Active tab highlighting and balance check gating.
⚙️ MVC Structure: Clear separation between controller, model, and views.
📁 Extensible Architecture: Easy to plug in more features or migrate to frameworks like Laravel.
