# Portfolio Project - Front End Development Class DORSET COLLEGE

Created by Julio Costa Beyeler 21312
https://juliobeyeler.netlify.app/

# Project Summary

For this project I will be building an interactive web resume using HTML, CSS and JavaScript. This module helped me to better understand the 
information architecture and guidelines that should be followed when creating a website apart from design. Furthermore, this project in
specific allowed me to better understand how HTML, CSS and JS interact with each other when coding, and how can I utilize them to their 
max potential. Being the concept a resume, I decided to show my personality through the website as much as possible, and below you can find
my develpment process and different ideas I had along the way.

## Development Process

### For Starters - Initial Ideas

### Webpages, layout and structures

* Three pages which would be an About Me (where I would briefly talk about me), Curriculum (insert my experiences and allow for download), and 
Contact Me (the user would be able to contact me through the website and know where else they can find me).
* Target Audience - Anyone interested in my work, such as recruiters for example or anyone who whishes to collaborate with me in a 
project.
* Colours - I wanted to create a website that matched my art style, hence being black and white, but including colorful elements that complimented 
the design and caught the user's attention (#020202, #D9D9D9, Gradient).
* Font - Courier Prime.
* Header - Logo would be located beneath the top of the page with the navigation bar directly under it, both being the same size.
* Background - Black background with a edited portrait on the right side of the page, in a fixed position.

### Coding the layout and structure

* For coding I used VS Code with the Live Server extensions so that I could visualize how the page was going to look like in real time,
opening it in a local server updating it everytime I saved the code.
* Since all three pages would have the same layout for header and background, I started by positioning the portrait edit and header logo,
since they would act as a guide of where to position the rest of the elements. Beneath the header logo, I positioned the navigation bar, with
the three different pages.
* Once I had the main.css file and default structure ready, I started adding the elements for the about me page, which would be introduction text.
* For the curriculum page, I wanted to input the main elements of my CV which were my education and work experience, as well as my skills, which I added an
image to illustrate them and created a CSS hover effect so that whenever the user hovers over it, a text comes up with the name of each skill.
* Lastly, I added a Contact Me page, with text fields, a submit button and image links for my other social media. 

### Core Functions

* On the about me page, I added beneath the introductory text an embedded Spotify playlist using HTML.
* On the curriculum page, I added a button so that the user would be able to download a .PDF version of my CV, a file that was stored inside 
the webpage documents.
* For the contact me forms, I used the Netflify forms HTML, so I would receiver the messages in my home page at the host.
* I added a animation keyframe on css for a changing gradient background which I applied on the navigation bar, as padding on the playlist,
as well as on the download and send buttons.
* I personalized the scroll bar using JavaScript and CSS animation keyframes.

### Final Touches

* Added comments on the files to explain the purpose of each code.
* Organized the css files, so that all code that the pages would share was in a single file, and specific modifications would have a separate file
with the name of the page title. I set up a different .CSS file for the scrollbar as well.
* Posting the code on GitHub and hosting on Netlify.

### Problems

* I firstly planned on using PHP code on the contact form to send the information directly to my email, but it wasn't working properly and was getting
overly complicated. Instead, I used the Netlify forms feature that only required me to add a name tag to each form element and a piece of code inside
the form tag. 
* The website doesn't respond properly on mobile devices, so in the meanwhile it is only responsive on desktop web browsers. 
* The elements weren't being displayed properly on the page at the position they were supposed to at certain moments, since I decided to go
with a different approach to their organization having the nav-bar below the header logo for example.

### Low-Fidelity Prototype
#### AboutMe Page

![](/prototype/aboutmelowfidelity.PNG)

#### Curriculum Page

![](/prototype/curriculumlowfidelity.PNG)

#### ContactMe Page

![](/prototype/contactmelowfidelity.PNG)

### High-Fidelity Prototype

* https://www.figma.com/file/5An5bxTf4na89ZwWyoKuha/Portfolio-Website?node-id=0%3A1
* Here I decided to completely changed as I made the prototype, the color scheme and structure, while keeping the same idea.

#### AboutMe Page

![](/prototype/aboutmeprototype1.PNG)
![](/prototype/aboutmeprototype2.PNG)

#### Curriculum Page

![](/prototype/cvprototype1.PNG)
![](/prototype/cvprototype2.PNG)

#### ContactMe Page

![](/prototype/contactmeprototype1.PNG)
![](/prototype/contactmeprototype2.PNG)

### User Testing

I had 2 people to test my website. The first one is currently working in the software development field.
The second one is pursuing a carreer in psychology and has a background in HR. Both are in their 30s and enjoy design as well. 
Common interests include gaming and binging movies. 
* Both didn't report any problems with the website navigation.
* During low-fidelity prototype phase, I had decided to go with a more black & white palette, but the first user didn't feel comfortable with the lacking of colors in the website. So I changed to include the gradient that blended easily into the design and made it more impactful.
* The first person also reported that they didn't feel like the font I used first matched the website, so I changed it from **Amatic** SC to **Courier Prime**. 
* The second person reported an error in the contact me form, where the fields weren't required to have text in order to send a message, so I had to fix that.
* Both reported problems opening the website in mobile applications. 

### References

#### Scrollbar customize
* Online Tutorials (2020). 'Creative Page Scroll Progress Bar | CSS3 & Vanilla Javascript'. Available at: https://www.youtube.com/watch?v=qYFkQa0Bbq0

#### Creating contact form with Netlify
* Traversy Media (2019). 'Simple Contact Form Submission With Netlify'. Available at: https://www.youtube.com/watch?v=6ElQ689HRcY

#### Creating download button for CV
* W3 Schools. 'HTML <a> download Attribute'. Available at: https://www.w3schools.com/tags/att_a_download.asp

#### Changing cursor when hover over buttons
* Tutorial Republic. 'How to Change the Cursor into a Hand Pointer on Hover using CSS'. Available at: https://www.tutorialrepublic.com/faq/how-to-change-the-cursor-into-a-hand-pointer-on-hover-using-css.php

#### Embed Spotify playlist into HTML code
* Spotify. 'Embed'. Available at: https://developer.spotify.com/documentation/widgets/generate/embed/
