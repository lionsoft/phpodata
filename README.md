# phpodata
Sample of the implementation ODATA data provider on the PHP 5.5+

## Source projects:

https://github.com/POData/POData

https://github.com/qeti/POData

https://github.com/qeti/SimplePOData

https://github.com/qeti/OData-base-example

https://github.com/MyCLabs\php-enum


## Read more:

http://habrahabr.ru/post/267811/

## Getting started:

1. Copy to root folder all files

2. Sample of geting metadata 
   
   http://SERVER/odata.svc/$metadata

3. Sample of getting data 
   
   http://SERVER/odata.svc/Products?$format=json&$filter=id%20le%20200&$inlinecount=allpages&$top=5&$skip=2