<style type="text/css">
#recent-works .col-xs-12.col-sm-4.col-md-2 {
padding: 0;
margin-left: 1%;
margin-right: 1%;
margin-bottom: 1%;
margin-top: 1%;
}
.summary
{
    font-weight: bold;
}
.list-view .summary {
  margin-bottom: 15px;
}
.view
{
    margin-bottom: 20px;
}
</style>
<div class="row">
    <div class="col-md-12">
    <section id="recent-works">
            <div class="container">
                <div class="center wow fadeInDown">
                    <br>
                    <h2>LISTE DES MODULES</h2>
                </div>
             <?php
            $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
                'id' => 'filter-form',
                'type' => 'horizontal',
                'method' => 'GET',
            ));
            ?>
            
            <div class="form-group">
                <div class="col-sm-4">
                    <input style="border: solid 2px #000;" type="search" class="form-control" name="query" placeholder="Recherche des modules" >
                </div>
                
        <?php  $this->widget(
        'booster.widgets.TbButton',
        array(
            'buttonType'=>'submit',
            'label' => 'Rechercher',
            'context' => 'danger',
            'icon'=>'search',
             ));?>
           </div>
            
            <?php
            $this->endWidget(); ?>        
                
                
                <div class="row">

    <?php $this->widget('booster.widgets.TbListView',array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    )); ?>
                </div>
            </div>
    </section>
    </div>

    <div class="col-md-3">
        <?php
        $this->breadcrumbs=array(
                'Modules',
        );
        if (Yii::app()->user->checkAccess('user_entr')|| Yii::app()->user->checkAccess('public') )
        {} else
            {                             
        $this->menu=array(
        array('label'=>'Créer un nouveau module','url'=>array('create')),
        array('label'=>'Manage Module','url'=>array('admin')),
        );
        }
        ?>
    </div>
</div>