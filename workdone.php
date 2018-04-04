Hello Dominic,
I have implemented the Wholesalers module and also done with some ports of retailer in admin panel and APIs.

Live : http://www.flamedevelopers.in
username : admin
Password: admin

* Work done for admin panel *

wholesalers
- The wholesalers only can be created by the admin.
- The list in the frontend will show the following information: Name,Address,Creation date,Disclosure,Button for delete
- The list can be sorted by name, address & creation date.
- Search function is available for name & address.
- For creating a new wholesaler the following fields needs to be saved: Name,Address,Street,Zipcode,City,Phone number,Type of meat, Answer of 4 yes / no questions,temp input field and File upload
- The edit mode just will show the saved data and allow to edit those.


* Api List * 

- Wholesaler list 
http://www.flamedevelopers.in/api/wholesaler/index
Info : -
The parameters m_type_1,m_type_2,m_type_3 are for meet type.
q_1,q_2,q_3,q_4 are the four questions and temp for temperature.
The value 0 stands for no and 1 stands for yes.

- Retailer List 
http://www.flamedevelopers.in/api/retailer/index
Info:- for displaying the list of all the retailers.

- Retailer detail
http://www.flamedevelopers.in/api/retailer/view/id/35
Info:- will display all the info related to the retailer shop.

- Retailer Create
http://www.flamedevelopers.in/api/retailer/create
Info :- 
The parameter type_id will be used for type of retailer hence it will be 1 for restaurant and 2 for retail trade. 
wholesalers parameter will be used for wholesalers. Just place the wholesalers id comma seprated eg(4,5)

- Retailer Shop delete 
http://www.flamedevelopers.in/api/retailer/delete/id/43

- My Retailers
http://www.flamedevelopers.in/api/retailer/myretail
Info :- Will display all the reailers created by the login user.

- Update Retailer 
http://www.flamedevelopers.in/api/retailer/update/id/35
Info : To update the retailer Info.

- Retailer list Sorted  
http://www.flamedevelopers.in/api/retailer/indexsorted
Info: Will display the list of retailers sorted by distance.

* Working on the Delivery note section in retiler and its apis *

Thanks
Karan Guleria