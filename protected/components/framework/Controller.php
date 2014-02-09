<?php

/**
 * Superclass di tutti i controller.
 *
 * @author Maurizio Cingolani
 * @version 1.0
 */
class Controller extends CController {

    /** Lista dei files css da caricare. */
    private $_css = array();

    /** Lista dei files js da caricare. Ogni elemento contiene il percorso all'interno della cartella /js */
    private $_js = array();

    /**
     * Inizializza alcune proprietà della classe.
     * In particolare imposta il layout di default 'main'.
     */
    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
        $this->layout = 'main';
    }

    public function addCss($css = null) {
        if ($css === null)
            return;
        if (is_array($css)) :
            array_merge($this->_css, $css);
        elseif (is_string($css)):
            $this->_css[] = $css;
        endif;
    }

    protected function css() {
        Yii::app()->getClientScript()->registerCssFile('//netdna.bootstrapcdn.com/bootstrap/' . Yii::app()->params['bootstrap'] . '/css/bootstrap.min.css');
        foreach ($this->_css as $c) :
            Yii::app()->getClientScript()->registerCssFile("/css/$c.css");
        endforeach;
    }

    /**
     * Popola la variabile $_js con il nome (o i nomi se l'argomento è un array) dei files js da caricare.
     * Si intende che i files sono contenuti nella cartella /js/[id controller].
     * 
     * @param mixed $js Nome del file (o array di nomi) all'interno della sottocartella /js/[id controller] da caricare
     * @return Controller Istanza attuale
     */
    public function addControllerJs($js) {
        if (is_array($js)) :
            foreach ($js as $j) :
                $this->_js[] = "$this->id/$j";
            endforeach;
        elseif (is_string($js)):
            $this->_js[] = "$this->id/$js";
        endif;
        return $this;
    }

    protected function js() {
        Yii::app()->getClientScript()->registerScriptFile('//code.jquery.com/jquery-' . Yii::app()->params['jquery'] . '.min.js', CClientScript::POS_END);
        foreach ($this->_js as $js) :
            Yii::app()->getClientScript()->registerScriptFile("/js/$js.js", CClientScript::POS_END);
        endforeach;
    }

}

/* End of file Controller.php */
