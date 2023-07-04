<!-- Add a Google Translate script to your webpage using the Google Translate API by following the below steps:

- Go to the Google Cloud Console Website (https://console.cloud.google.com/)

- Create a new project, navigate to the "APIs & Services" section and click on "Enable APIs and Services".

- Search for the "Google Translate API" and enable it for your project.

- Go to the "Credentials" section and create a new API key.

- Copy the API key and add it to the following code snippet, replacing "YOUR_API_KEY" with your actual key -->

<!DOCTYPE html>
<html>
<head>
   <title>Google Translate Button</title>
</head>
<body>
   <div id="google_translate_element"></div>
   <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({
            pageLanguage: 'en', layout: 
            google.translate.TranslateElement.InlineLayout.HORIZONTAL, autoDisplay: 
            false, includedLanguages: 'fr,de,es', gaTrack: true, gaId: 'YOUR_API_KEY'
            }, 'google_translate_element');
      }
   </script>
   <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>

<!-- Now, paste the code in the HTML of your webpage where you want the button to appear.

You can customize the code to select the languages you want to offer as options for translation and the layout of the button. -->