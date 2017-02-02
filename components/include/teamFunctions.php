<?php
$team = [
  ['id' => 1, 'active' => 1, 'name' => 'Marques D. Anderson',
      'title' => 'Founder/CEO', 'img' => 'Marques' ],
  ['id' => 2, 'active' =>  1, 'name' => 'Bente Aas-Engelstad',
      'title' => 'Deputy Chairman' , 'img' => 'BenteAasEnglestad'],
  ['id' => 3, 'active' =>  1, 'name' => 'Anastasia Malafey',
      'title' => 'Board Member' , 'img' => 'Anastasia'],
  ['id' => 4, 'active' =>  1, 'name' => 'Shauna Lee Sexsmith',
      'title' => 'International Project development', 'img' => 'ShaunaS'],
  ['id' => 5, 'active' =>  1, 'name' => 'Benjamin Aarø',
      'title' => 'Communications / Publishing	', 'img' => 'BenjaminA' ],
  ['id' => 6, 'active' =>  1, 'name' => 'Karen O’Brien',
      'title' => 'Board Member', 'img' => 'KarenO' ],
  ['id' => 7, 'active' =>  1, 'name' => 'Jen Lemen',
      'title' => 'Human Development', 'img' => 'JenL' ],
  ['id' => 8, 'active' =>  1, 'name' => 'Ingrid Somdal-Åmodt Vinje',
      'title' => 'Secretary', 'img' => 'IngridV' ],
  ['id' => 9, 'active' =>  1, 'name' => 'Finn-Jarle Lund Mathisen',
      'title' => 'CFO', 'img' => 'FinnJarleM' ],
  ['id' => 10, 'active' =>  1, 'name' => 'Anna Maria Aune-Moore',
      'title' => 'Board Member', 'img' => 'AnnaA' ],
  ['id' => 11, 'active' =>  1, 'name' => 'Natasha Agarwal',
      'title' => 'Research Economist', 'img' => 'NatashaA' ],
  ['id' => 12, 'active' =>  1, 'name' => 'Melissa Mahler',
      'title' => 'Senior legal advisor', 'img' => 'MelissaM' ],
  ['id' => 13, 'active' =>  1, 'name' => 'Andrea Bolder',
      'title' => 'Director social media & engagement', 'img' => 'AndreaB' ],
  ['id' => 14, 'active' =>  1, 'name' => 'Hans Petter Eikemo',
      'title' => 'Creative director', 'img' => 'HansE' ],
  ['id' => 15, 'active' =>  1, 'name' => 'Kjerstin Søreide Kvaavik',
      'title' => 'Intern	', 'img' => 'KjerstinK' ],
  ['id' => 16, 'active' =>  1, 'name' => 'Maiuran Loganathan',
      'title' => 'Intern', 'img' => 'MaiuranL' ],


  ['id' => 17, 'active' =>  0, 'name' => 'Carmen Hidalgo',     'title' => ''],
  ['id' => 18, 'active' =>  0, 'name' => 'Barbara Chami',     'title' => ''],
  ['id' => 19, 'active' =>  0, 'name' => 'Kaja Wold',     'title' => ''],
  ['id' => 20, 'active' =>  0, 'name' => 'Karin Attia',     'title' => 'Ambassador'],
  ['id' => 21, 'active' =>  0, 'name' => 'Janell Johnson',     'title' => 'Ambassador'],
  ['id' => 22, 'active' =>  0, 'name' => 'Yannis Bacalis',     'title' => 'Ambassador'],
  ['id' => 23, 'active' =>  0, 'name' => 'Jen Lemen',     'title' => 'Human Development'],
];

function find_all_team(){
  global $team;
  return $team;
}

function find_active_team()
{
  $filtered = array_filter(find_all_team(), function ($u) {
    return $u['active'] == 1;
  });
  return array_map(function ($u) {  return $u['id']; }, $filtered);
}

function find_previous_team_member($id)
{
  $team = find_active_team();
  $prevMemberID = $id;
  foreach ($team as $memberId) {
    if ($memberId == $id) {
      break;
    }
    $prevMemberID = $memberId;
  }
  return find_team_member($prevMemberID);
}

function find_next_team_member($id)
{
  $team = find_active_team();
  $member = $id;
  foreach ($team as $memberId) {
    if ( $memberId > $id) {
        $member = $memberId;
        break;
    }
  }
  return find_team_member($member);
}

function find_team_member($id)
{
  global $team;
  foreach ($team as $key => $val) {
    if ($val['id'] == $id) {
        return $val;
    }
  }
  return null;
}

function team_maximum_active_id()
{
  global $team;
  $id=0;
  foreach ($team as $key => $val) {
    if ($val['active'] && $val['id'] > $id) {
        $id = $val['id'];
    }
  }
  return $id;
}


function team_minimum_active_id()
{
  global $team;
  $id=0;
  foreach ($team as $key => $val) {
    if ($val['active'] && $val['id'] < $id) {
        $id = $val['id'];
    }
  }
  return $id;
}

function team_member_text($id)
{
  $path = "../include/teamMembers/" . $id;

  if( file_exists ( $path ) )
  {
    $myfile = fopen($path, "r") or die("Unable to open file!");
    $text = fread($myfile,filesize($path));
    fclose($myfile);
    return $text;
//    return include("teamMembers/" . $id);
  }
}

function team_member_detail($id)
{
  $teamMember = find_team_member($id);
  $results = "\n<div class='teamdetail'>";
  if ($teamMember['img'] != null) {
    $results .=  "<img src='../images/team/" . $teamMember['img'] . ".jpg' />";
  }
  $results .= "<p class='text'>" . team_member_text($id) . "</p>";

  $prev = find_previous_team_member($id);
  $next = find_next_team_member($id);
  $results .= "<div class='prevLink'>";
  if ($prev['id'] != $id) {
    $results .= "<a href='" . $prev['id'] . "'>" . $prev['name'] . "</a>";
  }
  $results .=  "&nbsp;</div>\n";

  $results .= "<div class='nextLink'>";
  if ($next['id'] != $id) {
    $results .= "<a href='" . $next['id'] . "'>" . $next['name'] . "</a>";
  }
  $results .=  "&nbsp;</div>\n";

  $results .=  "</div>\n";
  return $results;
}

function team_member_thumbnail($teamMemberID)
{
  $teamMember = find_team_member($teamMemberID);
  $results = "<div class='teammember'>";
  $results .= "<a href='teamMember/" . $teamMemberID . "'>";
  if ($teamMember['img'] != null) {
    $results .=  "<img class='img-circle' src='images/team/" . $teamMember['img'] . "_tn.jpg' ";
    $results .=   "onmouseover='style=\"opacity:1;\"' ";
    $results .=   "onmouseout='style=\"opacity:0.5;\"'";
    $results .=  " />";
  }
  $results .=  "<div class='labelblock'>\n";
  $results .= "<div class='name'>" . $teamMember['name'] . "</div>";
  $results .= "<div class='title'>" . $teamMember['title'] . "</div>";
  $results .=  "</div>";
  $results .=  "</a>";
  $results .=  "</div>\n";
  return $results;
}

?>
