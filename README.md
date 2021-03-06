# Testing theme made for OpenCharity using Drupal 7 framework.

> CSS styling is written following BEM methodology (some exceptions may be required due to Drupal's default classes and ids) and also uses Less as prepocessor.
> The whole theme is made from scratch and includes some modified template files in its templates/ directory to achieve a better structure for both the site and the code; yet, what is displayed on the testing page defileback.com/projects/1/ mostly consists of html content inside of management blocks, therefore still letting the administrators easily modify paragraphs or switch positions between sections.

> JavaScript has been avoided not to influence the pure HTML and CSS coding, yet could be really easily implemented if needed for some extra effects 

### Basic details:
header anchored to top, not editable from administration, containing logo and menu;
fixed background scaling with size and sliding site summary with slogans (image is screenshotted and edited to erase text, therefore may not be of best quality);
next-event block;
"Get involved" block with tabs, icons and link buttons;
site description with on-hover-interactive columns;
membership;
footer divided into an upper part with latest posts (configured with blog plugin) and a bottom section with copyright and social links.

### Mobile-responsive:
default logo is switched to a smaller one lacking of text taken from the assets;
header is higher than in desktop version;
image is scaled to be higher than wider following mobile screen, still fixed but may not work on really old devices (iOS 7 for example);
all tabs and elements that would be divided in columns on desktop version are scaled to reach full width and therefore be positioned one above other, making the site more readable;
membership icons have a little light-blue shadow to fill the emptiness of content related to the change previously described.
