<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'lt',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'404! Nuoroda yra neteisinga arba pasenusi.',
'No view'							=>	'Uždaras kodas. Jūs neturite teisės peržiūrėti sekantį turinį.',
'No permission'						=>	'Uždaras kodas. Jūs neturite teisės pasiekti sekantį puslapį.',
'Bad referrer'						=>	'Blogas HTTP_REFERER. You were referred to this page from an unauthorized source. If the problem persists please make sure that \'Base URL\' is correctly set in Admin/Options and that you are visiting the forum by navigating to that URL. More information regarding the referrer check can be found in the FluxBB documentation.',
'No cookie'							=>	'You appear to have logged in successfully, however a cookie has not been set. Please check your settings and if applicable, enable cookies for this website.',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory.',

// Miscellaneous
'Announcement'						=>	'Apreiškimas',
'Options'							=>	'Funkcijos',
'Submit'							=>	'Tvirtinti', // "Name" of submit buttons
'Ban message'						=>	'Jūs esate pašalintas iš šios bendruomenės.',
'Ban message 2'						=>	'Pašalinimas baigsis gale sekančios datos',
'Ban message 3'						=>	'Administratorius ar moderatorius, kuris Jūs pašalino iš šios bendruomenės, paliko sekantį pranešimą:',
'Ban message 4'						=>	'Prašome pranešti savo sužalojimus bendruomenės administratoriui',
'Never'								=>	'Niekad :(',
'Today'								=>	'Šiandien',
'Yesterday'							=>	'Vakar',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Eiti atgal',
'Maintenance'						=>	'Aptarnavimas',
'Redirecting'						=>	'Persiunčiam',
'Click redirect'					=>	'Spauskite, nenorėdami laukti',
'on'								=>	'įjungta', // As in "BBCode is on"
'off'								=>	'išjungta',
'Invalid email'						=>	'Elektroninis paštas neatitinka elektroninio pašto formato.',
'Required'							=>	'(Reikia)',
'required field'					=>	'yra reikalingas langelis šioje lentoje.', // For javascript form validation
'Last post'							=>	'Paskutinis pranešimas',
'by'								=>	' pagal ', // As in last post by someuser
'New posts'							=>	'Naujos gairės', // The link that leads to the first new post
'New posts info'					=>	'Go to the first new post in this topic.', // The popup text for new posts links TODO
'Username'							=>	'Vartotojo vardas',
'Password'							=>	'Slaptažodis',
'Email'								=>	'Elektroninio pašto adresas',
'Send email'						=>	'Siųsti elektroninį laišką',
'Moderated by'						=>	'Moderuojamas',
'Registered'						=>	'Registruotas',
'Subject'							=>	'Tema',
'Message'							=>	'Žinutė',
'Topic'								=>	'Tema',
'Forum'								=>	'Skelbimų lentos sistema',
'Posts'								=>	'Pranešimai',
'Replies'							=>	'Atsakymai',
'Pages'								=>	'Puslapiai:',
'Page'								=>	'%s puslapis',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'img tag'							=>	'[img] žymė:',
'Smilies'							=>	'Nuotaikos:',
'and'								=>	'ir',
'Image link'						=>	'paveikslėliai', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'rašė:', // For [quote]'s
'Mailer'							=>	'Laiškanešys', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Rimta informacija',
'Write message legend'				=>	'Parašykite savo žinutę ir patvirtinkite',
'Previous'							=>	'Ankstesnis',
'Next'								=>	'Sekantis',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Antraštė',
'Member'							=>	'Narys', // Default title
'Moderator'							=>	'Moderatorius',
'Administrator'						=>	'Administratorius',
'Banned'							=>	'Išmestas',
'Guest'								=>	'Nepažįstamasis',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] buvo rastas be [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] buvo atidarytas su [%2$s], kas nėra leistina',
'BBCode error invalid self-nesting'	=>	'[%s] buvo atidarytas pats savyje, kad nėra leistina',
'BBCode error no closing tag'		=>	'[%1$s] buvo rasta be [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] žymė turi tuščius atributus',
'BBCode code problem'				=>	'Yra problema su [code] žymėmis',
'BBCode list size error'			=>	'Jūsų sąrašas yra per ilgas, prašome pagalvoti kaip jį sumažinti.',

// Stuff for the navigator (top of every page)
'Index'								=>	'Pagrindinis',
'User list'							=>	'Vartotojų sąrašas',
'Rules'								=>	'Taisyklės',
'Search'							=>	'Ieškok',
'Register'							=>	'Užsiregistruok',
'Login'								=>	'Prisijunk',
'Not logged in'						=>	'Dabar esate prisijungęs.',
'Profile'							=>	'Vartotojas',
'Logout'							=>	'Atsijungti',
'Logged in as'						=>	'Prisijungta kaip ',
'Admin'								=>	'Administratorius',
'Last visit'						=>	'Paskutinį kartą aplankė: %s',
'Show new posts'					=>	'Rodyti naujus pranešimus nuo paskutinio apsilankymo',
'Mark all as read'					=>	'Žymėti viską kaip skaityta',
'Mark forum read'					=>	'Žymėti skelbimus kaip skaitytus',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Lentos poraštė',
'Search links'						=>	'Paieškos nuorodos',
'Show recent posts'					=>	'Rodyti naujausius skelbimus',
'Show unanswered posts'				=>	'Rodyti neatsakytus skelbimus',
'Show your posts'					=>	'Rodyti Jūsų skelbimus',
'Show subscriptions'				=>	'Rodyti Jūsų užprenumeruotas temas',
'Jump to'							=>	'Šokam į',
'Go'								=>	' Šokam ', // Submit button in forum jump
'Moderate topic'					=>	'Moderuoti temą',
'Move topic'						=>	'Judinti temą',
'Open topic'						=>	'Atidaryti temą',
'Close topic'						=>	'Uždaryti temą',
'Unstick topic'						=>	'Nuklyjuotį temą',
'Stick topic'						=>	'Klyjuojanti tema',
'Moderate forum'					=>	'Moderuoti lentą',
'Powered by'						=>	'Paremta %s',

// Debug information
'Debug table'						=>	'Debug information',
'Querytime'							=>	'Generated in %1$s seconds, %2$s queries executed',
'Memory usage'						=>	'Memory usage: %1$s',
'Peak usage'						=>	'(Peak: %1$s)',
'Query times'						=>	'Time (s)',
'Query'								=>	'Query',
'Total query time'					=>	'Total query time: %s',

// Email related notifications
'New user notification'				=>	'Alert - New registration',
'New user message'					=>	'User \'%s\' registered in the forums at %s',
'Banned email notification'			=>	'Alert - Banned email detected',
'Banned email register message'		=>	'User \'%s\' registered with banned email address: %s',
'Banned email change message'		=>	'User \'%s\' changed to banned email address: %s',
'Banned email post message'			=>	'User \'%s\' posted with banned email address: %s',
'Duplicate email notification'		=>	'Alert - Duplicate email detected',
'Duplicate email register message'	=>	'User \'%s\' registered with an email address that also belongs to: %s',
'Duplicate email change message'	=>	'User \'%s\' changed to an email address that also belongs to: %s',
'Report notification'				=>	'Pranešimas(%d) - \'%s\'',
'Report message 1'					=>	'Vartotojas \'%s\' pranešė apie sekantį pranešimą: %s',
'Report message 2'					=>	'Priežastis: %s',

'User profile'						=>	'Vartotojas: %s',
'Post URL'							=>	'Skelbimo nuoroda: %s',
'Email signature'					=>	'Forumo laiškanešys'."\n".'(Jam pažinčių nereikia)',

// For extern.php RSS feed
'RSS description'					=>	'Naujausios %s temos.',
'RSS description topic'				=>	'Naujausi pranešimai %s temoje.',
'RSS reply'							=>	'Ats: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS aktyvių pranešimų srautas',
'Atom active topics feed'			=>	'Atom aktyvių pranešimų srautas',
'RSS forum feed'					=>	'RSS lentos srautas',
'Atom forum feed'					=>	'Atom lentos srautas',
'RSS topic feed'					=>	'RSS pranešimų srautas',
'Atom topic feed'					=>	'Atom pranešimų srautas',

// Admin related stuff in the header
'New reports'						=>	'There are new reports',
'Maintenance mode enabled'			=>	'Maintenance mode is enabled!',

);
