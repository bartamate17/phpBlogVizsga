<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array("ThemeModel", "articleModel"));
		$this->load->helper(array("datewrite"));
	}

	public function index()
	{
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		//$output['bejegyzesdatumbol'] = $this->articleModel->getArticlesByDate();
		$output['bejegyzesek'] = $this->articleModel->getArticles();
		$output['szerzok'] = $this->articleModel->getAuthors();
		$output['instagram'] = $this->articleModel->getInstagramPictures();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}

	public function yearmonth($year, $month)
	{
		//ELLENŐRZÉS IS KELL!!

		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		$output['bejegyzesek'] = $this->articleModel->getArticlesByYearMonth($year, $month);
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}

	public function topic()
	{
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['bejegyzesek'] = $this->articleModel->getArticles();
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}

	public function author($id)
	{
		$id = (int) $id;
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		//$output['bejegyzesdatumbol'] = $this->articleModel->getArticlesByDate();
		$output['cikkOlvasas'] = $this->articleModel->ArticleRead($id);
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}
}
