This is my TASK APPLICATION build in codeigniter framework;

I use modal bootstrap for creating new task, updating task.
inside the view folder I have template folder,home folder and modal folder.
I included the index.php inside in modal and call the page into the index.php inside in home folder, and the I have header.php serves as 
the template of the page which I call those css file and in my footer.php I included all the js file name.
I have savetask.js file inside in assets/js folder all the data from my modal will push into js file and submit into my controller.
I have TaskController inside controller folder which initialize all data before passing into my TaskModel inside model folder.

This application is a single page which using the two way binding of data from view->controller->model vice versa using the savetask.js file.
