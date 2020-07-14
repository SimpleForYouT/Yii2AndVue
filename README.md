Yii2 and Vue Project
------------
You can use this template to create a website with yii2 and vuejs.

composer create-project --prefer-dist simpleforyou/yii2-and-vue basic

Directory Structure
-------------------

      assets/             contains assets definition (NOT NEEDED)
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resurces
      src/                contains helper classes
      web/vue             contains the entry vue script part (Do not upload this folder to your web server)

Controllers
------------
The use of the controllers is now different. Before, the controllers rendered a page or template. Now the controllers only return data because the views are changed by vue.

Views
------------
Due to the changes only 2 files are needed now. The main layout and an index page. In both files the VueRenderer will be called which contains the js files and css files

web/vue
------------
this folder is the vue project.

How to use for production
------------

1. run the build script in `web/vue/package.json`. 
After the build process is complete a new folder will be created under 
web the `prod` folder. This folder contains all the files built for vue.

2. Upload the prod folder to your web folder on your server. 
