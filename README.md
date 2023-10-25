# dt35
Drupal Training 35
Exercises

    Create a custom module which 

        Prints Hello World message when user goto /welcome page
        Prints Hello {Name} when user visits /welcome/{Name} page

            For e.g. if I visit - /welcome/gaurav - it should print Hello Gaurav
            if I visit - /welcome/innoraft  - it should print Hello Innoraft

    Create a new service and use that in above Route controller

        ervice should return 

            Good Morning if it is morning i.e. from 6AM - 12:00PM
            Good Afternoon if it is afternoon i.e. from 12:00PM - 04:00PM
            Good Evening if it is evening i.e. from 05:00PM - 09:00PM
            Good night if it is night i.e. from 09:00PM - 05:59AM

        Visitng /welcome should print the message based on above rules i.e.

            If morning - message would be - Hello World! Good Morning

        Vising /welcome/{Name}would display - Hello {Name}! Good Morning

    Create a configuration form 

        which should let admin configure the message based on time i.e. admin should be able to configure the time and its message.

            For e.g. In this form I should be able to give a time and specify the message. So, admin should be able to say - if time of the day is 12:00PM - 03:00PM then message should be - Good Noon 

    Create a block to display 

        current time in following timezone

            Indian Standard Time
            Eastern Standard Time
            Central Standard Time

        This block should only be visible on welcome pages

    Write a custom hook to display the count of how many times a node is viewed in a session.
