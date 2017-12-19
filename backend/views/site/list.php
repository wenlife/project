    <?php
       //var_export($article);
    use yii\helpers\Html;
    ?>

          <div class="panel panel-default" >
            <div class="panel-notice"></div>
            <table class="table table-hover">
            <?php
              foreach ($article as $key => $page) {
              
                  echo "<tr><td>";
                  echo Html::a($page->headline,['/site/detail',"id"=>$page->infoid]);
                  echo "</td><td>";
                  echo $page->author;
                  echo "</td><td>";
                  echo $page->publish_date;
                  echo "</td>";
              }
            ?>
            	<tr>
            		<td><a href="faf">学生热爱的学园祭热闹非凡，人山人海</a></td>
            		<td>管理员</td>
            		<td>2015-5-4 41</td>
            	</tr>
            	
            </table>
          </div>