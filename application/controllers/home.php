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
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		$output['bejegyzesek'] = $this->articleModel->getArticlesByYearMonth($year, $month);
		$output['szerzok'] = $this->articleModel->getAuthors();
		$output['instagram'] = $this->articleModel->getInstagramPictures();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}

	public function topic($id)
	{
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['temakorokOlvas'] = $this->ThemeModel->getThemeIdRead($id);
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['bejegyzesekOlvas'] = $this->articleModel->getArticles();
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		$output['szerzok'] = $this->articleModel->getAuthors();
		$output['instagram'] = $this->articleModel->getInstagramPictures();
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
		$output['olvas'] = $this->articleModel->ArticleRead($id);
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		// FONTOS!!! 
		$output['bejegyzesek'] = $this->articleModel->getArticlesByAuthor($id);
		$output['szerzok'] = $this->articleModel->getAuthors();
		$output['instagram'] = $this->articleModel->getInstagramPictures();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}

	public function article($id)
	{
		$id = (int) $id;
		//inicializált válltozó létrehozása
		$output = [];
		//olyan kulcsot adok, amit a viewban változóként látok viszont (temakorok)
		$output['temakorok'] = $this->ThemeModel->getTheme();
		$output['evhonaplink'] = $this->articleModel->getDateArticleCount();
		$output['olvas'] = $this->articleModel->ArticleRead($id);
		$output['oldalsav'] = $this->articleModel->getSideArticles();
		$output['szerzok'] = $this->articleModel->getAuthors();
		$output['instagram'] = $this->articleModel->getInstagramPictures();
		//az $output tömböt átadom a view-nak
		$this->load->view('home', $output);
	}
}
