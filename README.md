# PHP-Symfony-projects
<p align="center">
  <img src="https://symfony.com/logos/symfony_white_02.png" width="400px">
</p>

## Here are my symfony projects.

To access specific instructions on running each project on your machine, please consult the README file located within the respective project's folder. Each project should have its own README file that provides detailed information and guidelines for setting up and running that particular project successfully on your local environment.
 
### blog-MVC
This is a blog site that utilizes a MySQL database and employs Webpack for asset management. As a user, you have the ability to create, manage (edit and delete) your own posts, as well as report any posts that you believe should be deleted by the admin.

In the role of an admin, you have full control over user management, including the ability to delete users and modify their roles (such as switching between admin and user). You also have the authority to delete posts as necessary.

## taskM-api
This is a task tracker application with a Vue.js frontend. The app operates entirely on API requests, meaning that all interactions and data retrieval are done through the API. Once users log in, they are able to create tasks to help them remember important information.

## support-MVC
The ticket-based support system consists of a MySQL database and utilizes Webpack for asset management. Within the system, there are three user roles: User, Agent, and Admin.

Users have the ability to open tickets to request support. They can only view their own open tickets and check if an agent has been assigned to them.

Agents, on the other hand, can view tickets that have been assigned to them. They are responsible for resolving the issues and have the authority to close tickets once they are resolved.

Admins have the highest level of access and control within the system. They are responsible for assigning tickets to agents. In addition to ticket management, admins have the capability to create and modify user data. They can assign roles to users based on their requirements. Admins also have access to a log that records the activities and changes made to the tickets.

This system effectively allows users to open support tickets, agents to handle assigned tickets, and admins to manage the entire ticketing process, including user roles and ticket activities. dditionally, the system includes email notifications to keep users updated on ticket status and important updates.