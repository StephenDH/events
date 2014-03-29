<?php 

class HtmlElement{
	protected $tag = "p";
	protected $attributes = "";

	public function __construct($content, $attributes = array()){
		$this->attributes = $attributes;
		$this->content = $content;
		$this->attributes = $this->calculateAttributes($attributes);
	}

	public function __toString(){
		return "<{$this->tag}{$this->attributes}>$this->content</{$this->tag}>";
	}

	protected function calculateAttributes($attributes){
		$result = "";
		foreach ($attributes as $attribute => $value) {
			$result .= isset($attributes[$attribute]) ? " {$attribute}=\"{$value}\"" : "";	
		}
		return $result;
	}
}

class HtmlVoidElement extends HtmlElement{
	public function __construct($attributes = array()){
		parent::__construct("", $attributes);
	}
	public function __toString(){
		return "<{$this->tag}{$this->attributes} />";
	}
}

class Paragraph extends HtmlElement{
}

class Heading extends HtmlElement{
	public function __construct($content, $level = 1, $attributes = array()){
		$this->tag = "h$level";
		parent::__construct($content, $attributes);
	}
}

class Div extends HtmlElement{
	public function __construct($content, $attributes = array()){
		$this->tag = "div";
		parent::__construct($content,$attributes);
	}
}

class Button extends HtmlElement{
	public function __construct($content, $attributes = array()){
		$this->tag = "button";
		parent::__construct($content,$attributes);
	}
}

class Input extends HtmlVoidElement{
	public function __construct($name, $type = "text", $attributes = array()){
		$this->tag = "input";
		$attributes["name"] = $name;
		$attributes["type"] = $type;
		parent::__construct($attributes);
	}
}

class Form extends HtmlElement{
	public function __construct($content, $attributes = array()){
		$this->tag = "form";
		parent::__construct($content,$attributes);
	}
}

class Img extends HtmlVoidElement{
	public function __construct($source, $alter, $width, $height, $attributes = array()){
		$this->tag ="img";
		$attributes["source"] = $source;
		$attributes["alter"] = $alter;
		$attributes["width"] = $width;
		$attributes["height"] = $height;
		parent::__construct($attributes);
	}
}

class MyList extends HtmlElement{
	public function __construct($items = array(), $class, $ordered = false, $attributes = array()){
		$content="";
		if($ordered){
			$this->tag ="ol";	
		}else{
			$this->tag ="ul";
		}
		$attributes["class"] = $class;

		foreach ($items as $value) {
			$content .= $value;
		}
		parent::__construct($content,$attributes);
	}
}

class ListItem extends HtmlElement{
	public function __construct($content, $class, $listTag = "li", $href = "", $attributes = array()){
		$this->tag = $listTag;
		if($listTag=="a"){
			$attributes["href"] = $href;	
		}
		$attributes["class"] = $class;
		parent::__construct($content, $attributes);
	}
}


