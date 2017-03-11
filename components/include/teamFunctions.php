<?php
$string = file_get_contents("../include/data/team.json");
$team = json_decode($string, true);

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
  $results .= "<div style='width:100%;margin: 0px auto; display:block;'>";
  $results .= "<H1 style='width:100%;text-align:center;'>" . $teamMember['name'];
  if ($teamMember['title'] != null) {
    $results .= " - " . $teamMember['title'];
  }
  $results .= "</H1>";

  if ($teamMember['img'] != null) {
    $results .=  "<img  style='margin: 0px auto; display:block;' src='../images/team/" . $teamMember['img'] . ".jpg' />";
  }
  $results .= "</div>";

  $results .= "<p class='text'>" . team_member_text($id) . "</p>";

  $prev = find_previous_team_member($id);
  $next = find_next_team_member($id);
  $results .= "<div class='prevLink'>";
  if ($prev['id'] != $id) {
    $results .= "<a href='" . $prev['id'] . "'>";
    $results .= "<span class='prev'>&laquo;</span>";
    $results .= $prev['name'];
    $results .= "</a>";
  }
  $results .=  "&nbsp;</div>\n";

  $results .= "<div class='nextLink'>";
  if ($next['id'] != $id) {
    $results .= "<a href='" . $next['id'] . "'>";
    $results .= $next['name'];
    $results .= "<span class='next'>&raquo;</span>";
    $results .= "</a>";
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
    $results .=   "onmouseover='toggleTeamThumbnailCaption(this, 1);' ";
    $results .=   "onmouseout='toggleTeamThumbnailCaption(this, 0);'";
  // $results .=   "onmouseover='style=\"opacity:1\";toggleTeamThumbnailCaption(this, 1)' ";
  // $results .=   "onmouseout='style=\"opacity:0.5\";toggleTeamThumbnailCaption(this, 0)'";
    // toggleTeamThumbnailCaption
    $results .=  " />";
  }
  $results .=  "<div class='labelblock' ";
  $results .=   "onmouseover='toggleCaption(this, 1);' ";
  $results .=   "onmouseout='toggleCaption(this, 0);'";
  $results .=  " >\n";

  $results .= "<div class='name'>" . $teamMember['name'] . "</div>";
  $results .= "<div class='title'>" . $teamMember['title'] . "</div>";
  $results .=  "</div>";
  $results .=  "</a>";
  $results .=  "</div>\n";
  return $results;
}

?>
