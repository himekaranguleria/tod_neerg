https://i9xnr5.axshare.com/#g=1&p=nutzer    gimik123
https://7xxknc.axshare.com/#g=1&p=men___ohne_login_      gimik123

Requirements Greendot Frontend / Webservice
The Frontend will contain the following parts - Users (= Nutzer)
- Retailer (= Einzelhändler)
- Wholesalers (= Großhändler)
1. Users
For this part is webservice for the app needed. For the registration in the app the user needs to fill in the following values:
- Name
- E-Mail
- Password
The frontend will show a list of all users including the registration date.
Also the admin got the option for resetting the password of the user. Then automatically a new password needs to be generated and sent to the users email.
The same function (password forgotten) is needed as webservice for the app.
A user also can be deleted by the admin.
The list can be sorted by name, email & registration date.
Search function is available for name & email.
For the app then is needed a webservice for checking the login by email & password.
A registered user only can login in the app – not in the web frontend.
The web frontend is only available for admins.
2. Retailer
A registered user can add several retailer shop for his account.
So the apps needs first a webservice for getting the existing retailer shops based on the user login.
In the frontend will be shown the list of all by the app users created retailer shops.
The list will show the following fields:
- Name
- Address
- Type (one out of two types)
- Actual state of the delivery note (seeing below) - Button for detail
- Button for delete
The app needs for creating a new retailer shop a webservice with the following parameters:
- User id (for creating relation)
- Type
- Name
- Address (when saving the lat / lng needs to be look up and also saved) o Street
o Zipcode
o City
- Phone number
- Fax number
- Mobile number
- List of selected wholesalers

For showing in the app the list for selecting wholesalers there’s also a webservice needed for returning all wholesalers (maybe filtered by city).
Also from the app it should be possible to create a new wholesaler by delivering the following values:
- Name
- Address
o Street
o Zipcode o City
One suggestion (from my side): one field in creating new retailer for submitting id’s of already existing wholesalers and one field for submitting new objects of wholesalers. For a created retailer shop the user will have the possibility to upload a delivery note. The app will submit for this the following values to the webservice which needs to be created:
- Retailer shop id
- Date of the delivery note
- Type of the meat (multiple selection out of 3) - Weight for each selected type of meat
- Delivery note as file (picture or PDF)
The detail of the retailer shop in web frontend then needs to show the following data: - User name (which user created it)
- Name
- Address
- Contact data (phones numbers)
- Data of the list delivery note including the uploaded file - List of the selected wholesalers
The admin can edit the name, address & contact data.
The actual state of the delivery note in the list will be shown like a traffic light:
- Green: e.g. last delivery note upload not older as 2 weeks - Orange: e.g. last delivery note upload not older as 4 weeks - red: e.g. last delivery note upload older as 4 weeks
When the status is switching from orange to red the user of the retailer shop automatically should get a e-mail notification.
The list can be sorted by name, address & type.
Search function is available for name & address

3. Wholesalers
- Wholesaler can be created by admin panel.
- List in the adminarea will show 
 -- Name
 -- Address
 -- Street
 -- Zipcode 
 -- City
 -- Creation date
 -- Disclosure
 -- Button for delete
 - list can be sorted by name, address & creation date.
 - Search function is available for name & address.
 - For creating a new wholesaler the following fields needs to be saved:
- Name
- Address
o Street
o Zipcode o City
- Phone number
- Type of meat
- Answer of 4 yes / no questions
- Answer of one question with input field
- File upload the disclosure document (pdf or picture)

- The edit mode just will show the saved data and allow to edit those.

The app will show all retail shops to the users without login. For showing them a webservice is needed:
- Getting all retailer shops
- Getting all retailer shops sort by distance
o Appswillsendlat/lngofactualposition
o Calculatethensimplythedistancebetweenthetwolat/lngvaluesandsort
the response by this
In both functions the actual state of the delivery note also needs to be included in the response.
When the user will click in the app on a retailer shop all information needs to be get by id including the delivery note data and the data of the related wholesaler(s).
