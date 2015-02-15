Contents of this folder
=======================

This folder contains different applications in its own structures, there's no path restrictions but some logical ones
like:

 - Applications **must** separated logically based on their roles & meanings
   in the software (the parent application)
 - Please **do not** nesting application folders when applications are nested logically to keep them clean & loosely coupled by their master router

Suggested structure for an application is:

 - bundles/ <small>*`packaged functionalities`*</small>
	 - *&lt;name-of-bundle&gt;*/
		 - controllers/ <small>*`units of business-logic, containing actions`*</small>
			 - *controller-1.php*
			 - *controller-2.php*
			 - ...
		 - views/ <small>*`visual representations, bounded to controller actions`*</small>
			 - controller-1/
				 - *action-1.tpl*
				 - *action-2.tpl*
				 - ...
			 - controller-2/
				 - ...
		 - resources/ <small>*`necessary things like models, i18n dictionaries, other commons`*</small>
			 - models/
			 - ...
	 - *&lt;name-of-another-bundle&gt;*/
	 - ...
 - configs/ <small>*`configuration files`*</small>
 - layouts/ <small>*`common visual layouts for this application`*</small>
 - resources/ <small>*`shared resources which are bundled to this application like common models, non-composer libs, helpers, etc...`*</small>
	 - models/
	 - i18n/
	 - ...

