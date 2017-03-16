# my-pwp-Valente
My personal website

## Milestone 1 feedback
Your directory structure is built to spec, but there are some issues with your documentation and code for this Milestone.
 
1. The Purpose, Audience, and Goal sections are missing. Unfortunately I cannot give this Milestone a passing grade without these. Finish up the documentation by tomorrow end-of-day (1/25/17 17:00) and I'll bump your grade to Tier II.
 
2. The Persona reads too general - this John/Jane Doe could be about almost anyone. The Persona needs to be much more specific if you plan to build a site for a specific purpose. The Technology section definitley could be nailed down. You may think of modeling your Persona after an IT Recruiter or a Senior Dev/Tech Lead that will be evaluating job candidates. Or perhaps professional peers in the tech community that you may be networking with, etc. (Keep in mind that IT Recruiters typically target mid - senior level, and rarely spend all day on LinkedIn searching for candidates cold.) As it is - this Persona is too general and does not give enough information to design and build a targeted website around.

It's cool you included an Interaction Flow as part of your Use Case, but the majority of these steps don't involve your PWP at all. The reason an Interaction Flow was not required in this Milestone is because PWP is static and one-page only - so there is no interactive system playing an "actor" here.

 Please take a look at the [Milestone 1 Documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/) and [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/) for guidance.

 Unfortunatley, because the Purpose, Audience and Goal are missing, I can only sign off on this Milestone at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Resubmit with the missing documentation and I'll bump it to Tier II.

You are clear to begin work on [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/). However  I strongly encourage you to rethink the Purpose/Audience/Goal(s) and Persona. 

Slack me (@rm-rf) if you have any questions. There were also issues with your code. See Edits &amp; Suggestion below.

### Edits &amp; Suggestions
- add `/vendor` to your .gitignore, on line 3
- line 4 in milestone-1.php is missing the closing `>` tag. Be careful - stuff like this can screw up HTML.
- Watch your HTML indentation. It's way off.
- Your Use Case paragraph should be inside a `<p>` tag.

### Milestone 1 Feedback - Updated.
Nice work - this is much improved. I'm looking forward to seeing your ideas about how you plan to present your portfolio items and highlight your tech skills in Milestone 2a. I can see this portfolio site being designed with small to medium sized tech and development firms, freelance clients, and professional peers in mind.

There is one lingering code error: Change line 3 in the **.gitignore** to be `/vendor` (Remove the leading ".")

Your Milestone 1 passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin work on [Milestone 2&alpha;](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/).

## Milestone 2a Feedback 
Your HTML Structure is perfect. Your directory structure, on the other hand, needs a little work. I'll mention these in the "Edits" section of the feedback below.

Good job on your content strategy! I really like the plan you have for your site. All the sections of your site are very well thought out. the wireframes are also very specific and should serve as an excellent blueprint when you are building the actual site. I only have a few small concerns about the actual wireframes. Do you plan on having the about me on another page, and will your resume be on that page? And do you want to use a third party plugin to display the portfolio section? (I would recommend swipebox or flickity. 

### Edits
- styles should be renamed CSS and moved to the root of the project
- images directory should be renamed img and moved to the root of the project. 

### grade tier IV

## Milestone 2&beta; Feedback
You're about 30% done. You can get to 85-90% with a solid plan and 3-4 very focused hours. Detailed notes on our meeting left via Slack. Your Milestone 2b passes at Tier III.

## Milestone 3 / Final Feedback
I hope this PWP has given you some good experience in front-end web development. There's a lot of room for growth here - so keep working on it. The hover effect on your main image is a really nice touch - good work on this. 

Unfortunately the contact form isn't working. See Suggestions below, and come talk with me if you want some help debugging. 

Design wise, I would consider adding a bit more contrast. Try changing the background color to white to see what I mean. Strong visual impact can be achieved simply through a good color choice, a good font choice (sparingly used), and sufficient contrast.

Your Final PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Suggestions
- Ouch! Your contact form doesn't work! I'm seeing a 500 error in the console on submit. This could be caused by several things.... Composer packages not installed, mailer files not uploaded, path to mailer.php incorrect, etc. See me and I can help you troubleshoot this.
- Consider using a lighter font color on the darker background so the text is easier to read.
- Check the Bootstrap form classes on the "Subject" input field on your contact form. Fix these and it should match the other fields. 
