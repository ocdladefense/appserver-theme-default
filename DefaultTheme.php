<?php


class DefaultTheme extends Theme {


	
	public function __construct() {
		parent::__construct("default");
		
		// $this->addScripts($this->getThemeScripts());
		$this->addStyles($this->getLibraryStyles());
		$this->addStyles($this->getThemeStyles());

		$this->addScripts($this->getLibraryScripts());
		$this->addScripts($this->getThemeScripts());
	}



	public function addContent($content = '') {
		$this->content = $content;
	}



	private function getLibraryStyles() {
		
		
		$styles = array(
			array(
				"active" => true,
				"href" => $path . "/content/libraries/modal/modal.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/content/libraries/modal/loading.css?bust=001"
			)
		);

		return $styles;
	}


	private function getLibraryScripts() {

		$modal = array(
			"src" => "/content/libraries/modal/modal.js"
		);

		return array($modal);
	}




	private function getThemeStyles() {
	
		$path = "/content/themes/default";
		
		
		$styles = array(
			array(
				"active" => false,
				"rel" => "stylesheet",
				"href" => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
				"integrity" => "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh",
				"crossorigin" => "anonymous"
			),
			array(
				"active" => true,
				"href" => $path . "/css/resets.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/structure.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/structure-800px.css?bust=001",
				"media" => "screen and (min-width: 800px)"
			),
			array(
				"active" => true,
				"href" => $path . "/css/headings.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/ux.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/responsive.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/main-menu.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/tables.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/form.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/style.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/drawer.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/colors.css?bust=001"
			),
			array(
				"active" => true,
				"href" => $path . "/css/widgets.css?bust=001"
			)
		);
	
		return $styles;
	}


	private function getThemeScripts() {

		return array(
			array(
				"src" => "https://code.jquery.com/jquery-3.4.1.slim.min.js",
				"integrity" => "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n",
				"crossorigin" => "anonymous",
				"active" => true
			),
			array(
				"src" => "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
				"integrity" => "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo",
				"crossorigin" => "anonymous",
				"active" => true
			),
			array(
				"src" => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
				"integrity" => "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6",
				"crossorigin" => "anonymous",
				"active" => false
			),
			
			
			array(
				"src" => "/content/libraries/jquery/jquery-1.11.0-min.js"
			),
			

			// LOAD HTTP RELATED FUNCTIONALITY.
			array(
				"src" => "/content/libraries/http/HttpServer.js"
			),
			array(
				"src" => "/content/libraries/http/Route.js"
			),

			array(
				"src" => "/content/libraries/core/Callout.js"
			),
			array(
				"src" => "/content/libraries/core/Repository.js"
			),
			array(
				"src" => "/content/libraries/core/SiteLibraries.js"
			)

			
			// $module_path = "/modules/webconsole";
			/*
			$scripts = array(
				"$module_path/assets/lib/event.js",
				"$module_path/assets/lib/datetime.js",
				"$module_path/assets/lib/modal.js",
				"$module_path/assets/lib/view.js",
				"$module_path/assets/lib/Dom.js",
				"$module_path/assets/lib/http/http.js",
				"$module_path/assets/lib/http/HttpCache.js"
			);*/
		);
	}



	private function getDeprecated() {
		/*
		array(
			"src" => "/content/libraries/react/react-16.12.0-development.js"
		),
		array(
			"src" => "/content/libraries/react/react-16.12.0-dom-development.js"
		),
		array(
			"src" => "/content/libraries/react/babel-6.26.0-standalone.js"
		)
		*/
	}
	
}