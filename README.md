## Api for ticket system made with laravel

Remember to update de events and users seeder

Ask for api token for auth with Laravel/Sanctum with a post request with email and password to "http://ticket-api.oo/api/login", postman adviced for this.

<b>Routes:</b>

GET:<br/>
    "http://ticket-api.oo/api/events/get/id**" -> The id is optional, dont include to get all.<br/>
    "http://ticket-api.oo/api/tickets/get/document**" -> The document is required, is the document of the customer that you are asking for tickets.<br/>
    "http://ticket-api.oo/api/customers/get/document**" -> The document is required, is the document of the customer you are asking for data.<br/>
POST:<br/>
    "http://ticket-api.oo/api/tickets/post" -> Used to create the ticket request, by the way saving and updating customer info.<br/>
<br/>
Remember to replace on all fetch functions "http://ticket-api.oo" by your host or domain.

Front End on https://github.com/eagiraldor94/ticket-front
