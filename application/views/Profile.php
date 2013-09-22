<?php echo $header; ?>

<div class='user_name'>
Анна Ильюшина</div>

<div style='margin-top: 10px; font-family: Calibri;'>
<div style="overflow: hidden">
<div style="width: 30%; float: left">
<div style="text-align: center">
<img width="150" src="/static/images/foto.jpg">
</div>
<div style="margin-left: 10px">
<table>
<tbody><tr><td width="150"><b>Возраст</b></td>
<td>25</td></tr>
<tr><td><b>Город</b></td>
<td>Москва</td></tr>
</tbody></table>
</div>
</div>

<div style='float: left; width: 70%'>
<div style='height: 60px'><h1 style="float: left;" class='tab active_tab'><a href='javascript:void(0)' class='tabLink'>Мои цели</a></h1>
<h1 style="float: right" class='tab passive_tab'><a href='javascript:void(0)' class='tabLink'>Мои достижения</a></h1></div>
<div class="achivment_list">
<ol id="achivmentOL">
<?php 
$goalIndex = 1;
$achivmentIndex = 1;
foreach($achivments as $achivment):?>
<li style="height: 60px; display: <?php if($achivment['achived'] == 1) echo 'none'; else echo 'block'?>">
    <div><div class="achivment_number"><?php if($achivment['achived'] == 1) echo $achivmentIndex; else echo $goalIndex ?></div><div class="achivment_title"><a style="text-decoration: none" href="/Achivment/<?php echo $achivment['ID']?>"> <?php echo $achivment['Name'] ?></a></div>
<div ng-show="goal" style="float: right; height: 35px; margin-top: 20px">
    <a href='javascript:void(0)' class='makeAchived' goalID='<?php echo $achivment['ID'] ?>'><img src='/static/images/achived.jpg'></a>
<a id="4c093" class="button--add-achievement" href="" goal-clone-button="766208" ng-hide="role_participant" done-this-button="goal" title="Add this as an Achievement"></a>
<a id="6e8e3" class="button--add-goal" goal-clone-button="766208" ng-hide="role_participant" want-this-button="goal" title="Add this as a Goal"></a>
</div>
</div></li>
<?php 
    if($achivment['achived'] == 1)
         $achivmentIndex++;
    else
         $goalIndex++;
endforeach;?>
</ol>

</div>
</div>
    
<a href="#" id='addGoal'>Добавить цель</a>
<a href="#" id="editProfile">Редактировать профиль</a>
</div>
</div>

</div>
</div>


			<div style="width: 100%; height: 50px;">
			</div>
</div>
			</div>		
</div>
</div>

<div id="addAchivmentDiv">
    Название <input type='text' id="goalName"/>
    Описание <input type='text' id="goalDescription"/>
    Категория <select id="goalCategoryID"> 
        <?php foreach ($categories as $category): ?>
        <option categoryID='<?php echo $category['ID']?>'>
                <?php echo $category['Name']?>
            </option>
        <?php endforeach;?>
    </select>
</div>

<div id="editProfileDiv">
     Имя <input type='text' id="userName"/>
     Дата рождения <input type='text' id="userBirthdate"/>
     Город <input type='text' id="userCity"/>
</div>

<script type="text/javascript">
                $("#editProfileDiv").dialog({
                        title: 'Редактирование профиля',
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "OK",
					click: function() {
                                                $.ajax(
                                                    {
                                                        type: 'POST',
                                                        url: '/edit_profile/',
                                                        data: {
                                                            userName: $('#userName').val(),
                                                            userBirthdate: $('#userBirthdate').val(),
                                                            userCity: $('#userCity').val()
                                                        },
                                                        success: function(data, textStatus, jq){
                                                            
                                                        }
                                                    }
                                                )
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Отмена",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});
                
                $( "#editProfile" ).click(function( event ) {
			$( "#editProfileDiv" ).dialog( "open" );
			event.preventDefault();
		});
    
    		$( "#addAchivmentDiv" ).dialog({
                        title: 'Добавление цели',
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "OK",
					click: function() {
                                                $.ajax(
                                                    {
                                                        type: 'POST',
                                                        url: '/add_goal/',
                                                        data: {
                                                            name: $('#goalName').val(),
                                                            description: $('#goalDescription').val(),
                                                            category: $('#goalCategoryID option:selected').attr('categoryID')
                                                        },
                                                        success: function(data, textStatus, jq){
                                                            if(textStatus=='success')
                                                                {
                                                                    var div = '<div style="height: 60px"><div class="achivment_number">'+parseInt($('#achivmentOL li').length+1)+'</div><div class="achivment_title">'+$('#goalName').val()+'</div><div ng-show="goal" style="float: right; height: 35px; margin-top: 20px"><a id="4c093" class="button--add-achievement" href="" goal-clone-button="766208" ng-hide="role_participant" done-this-button="goal" title="Add this as an Achievement"></a><a id="6e8e3" class="button--add-goal" goal-clone-button="766208" ng-hide="role_participant" want-this-button="goal" title="Add this as a Goal"></a></div>';
                                                                    $('#achivmentOL').append('<li>'+div+'</li>')
                                                                }
                                                        }
                                                    }
                                                )
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Отмена",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});
                
               $( "#addGoal" ).click(function( event ) {
			$( "#addAchivmentDiv" ).dialog( "open" );
			event.preventDefault();
		});
       
               $('.tabLink').click(function(){
                        var parent = $(this).parent();
                        var sibling = parent.siblings();
                        if (parent.hasClass('passive_tab'))
                              {
                                  parent.removeClass('passive_tab');
                                  parent.addClass('active_tab');
                                  
                                  sibling.addClass('passive_tab');
                                  sibling.removeClass('active_tab');
                                  
                                  $('#achivmentOL').children().each(function(index, el){
                                      var cssDisplay = $(el).css('display');
                                      if(cssDisplay == 'block')
                                         $(el).css('display', 'none'); 
                                     else
                                         $(el).css('display', 'block'); 
                                  })
                              }  
               });
               
               $('.makeAchived').click(function(){
                        var me = $(this);
                        var goalID = $(this).attr('goalID');
                        $.ajax(
                                    {
                                        type: 'POST',
                                        url: '/achive_goal/',
                                        data: {
                                            goalID: goalID
                                        },
                                        success: function(data, textStatus, jq){
                                            var answer = JSON.parse(data);
                                            if(answer.success)
                                                {
                                                    me.parents('li').css('display', 'none');
                                                }
                                            else
                                                {
                                                    $('<div>'+answer.errorMsg+'</div>').dialog({
                                                        title: 'Ошибка',
                                                        buttons: [
                                                            {
                                                                text: "OK",
                                                                click: function(){
                                                                     $( this ).dialog( "close" );  
                                                                }
                                                            }]
                                                    });
                                                }
                                        }
                                    }
                                )
               })
               
                
    
</script>
</body>
</html>