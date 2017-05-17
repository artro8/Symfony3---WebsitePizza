Symfony3 - PizzaCMS
========================

Core features:
========================

- This project allows to change menu
- We can add a new promotions offerts
- If our contact details will have to be change, the panel provide this option

Project configuration
========================

- Symfony version 3.2.7
- PHP version 5.6.24
- MySQL version 5.0.11

Used Bundles
========================

- FOSUserBundle
- KnpMenuBundle
- SonataAdminBundle

Installation Instructions
========================

At first you must git clone
~~~
git clone https://github.com/artro8/Symfony3---WebsitePizza.git
~~~
Generate database using command:
~~~
php bin/console database:generate:entity --force
~~~
After importing the database create an admin user using command:
~~~
php bin/console fos:user:create 
~~~
I wish you lots of fun :)

Photos
========================

Home Page

![home](https://cloud.githubusercontent.com/assets/17146309/26152147/0a303886-3b06-11e7-820a-aeb6d101f5b1.png)

Content on the home page

![home](https://cloud.githubusercontent.com/assets/17146309/26152293/a55e29f8-3b06-11e7-9ff0-6961df1a3851.png)

Admin Panel

![admin](https://cloud.githubusercontent.com/assets/17146309/26152344/dcca4dfe-3b06-11e7-93d5-595a4100b082.png)

