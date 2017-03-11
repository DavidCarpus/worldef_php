<?php
function find_all_collaborators(){
  return [
    ['url' => 'http://www.ntnu.no/',        'img' => 'images/collaborator/ntnu.png',              'imgC' => 'images/collaborator/ntnu_c.png'],
    ['url' => 'http://www.harvard.edu',     'img' => 'images/collaborator/harvard.png',           'imgC' => 'images/collaborator/harvard_c.png'],
    ['url' => 'http://www.ucla.edu',        'img' => 'images/collaborator/UC_Riverside_seal.svg', 'imgC' => 'images/collaborator/UC_Riverside_seal_c.svg'],
    ['url' => 'https://www.stanford.edu/',  'img' => 'images/collaborator/stanford.png',          'imgC' => 'images/collaborator/stanford_c.png'],
    ['url' => 'https://www.nyu.edu/',       'img' => 'images/collaborator/nyuLogo.png',           'imgC' => 'images/collaborator/nyuLogo_c.png'],
    ['url' => 'https://www.mit.edu/',       'img' => 'images/collaborator/mitLogo.png',           'imgC' => 'images/collaborator/mitLogo_c.png'],
    ['url' => 'http://www.uio.no/',         'img' => 'images/collaborator/uio_seal.png',          'imgC' => 'images/collaborator/uio_seal_c.png'],
    ['url' => 'http://www.usc.edu/',        'img' => 'images/collaborator/usc_seal.png',          'imgC' => 'images/collaborator/usc_seal_c.png'],
    ['url' => 'http://www.artcenter.edu/',  'img' => 'images/collaborator/artcenter_logo.png',    'imgC' => 'images/collaborator/artcenter_logo_c.png'],
    ['url' => 'http://www.iug.no/',         'img' => 'images/collaborator/iug_seal.png',          'imgC' => 'images/collaborator/iug_seal_c.png'],
    ['url' => 'http://drc.dk/home',         'img' => 'images/collaborator/drc_logo.png',          'imgC' => 'images/collaborator/drc_logo_c.png'],
    ['url' => 'http://www.ideo.com/',       'img' => 'images/collaborator/ideo_logo.png',          'imgC' => 'images/collaborator/ideo_logo_c.png'],
    ['url' => 'http://www.hopefulworld.org/','img' => 'images/collaborator/hopefulworld.png',      'imgC' => 'images/collaborator/hopefulworld_c.png'],
    ['url' => 'http://www.unhcr.org/','img' => 'images/collaborator/unhcrLogo.png',      'imgC' => 'images/collaborator/unhcrLogo_c.png'],
    ['url' => 'http://www.unfoundation.org/','img' => 'images/collaborator/unfoundationLogo.png',      'imgC' => 'images/collaborator/unfoundationLogo_c.png'],
    ['url' => 'http://www.undp.org/','img' => 'images/collaborator/undpLogo.jpg',      'imgC' => 'images/collaborator/undpLogo_c.jpg'],
    ['url' => 'http://www.savethechildren.org/','img' => 'images/collaborator/savethechildrenLogo.png',      'imgC' => 'images/collaborator/savethechildrenLogo_c.png'],
    ['url' => 'http://startuplab.no/','img' => 'images/collaborator/startuplabLogo.png',      'imgC' => 'images/collaborator/startuplabLogo_c.png'],
    ['url' => 'http://www.futureearth.org/','img' => 'images/collaborator/futureearthLogo.png',      'imgC' => 'images/collaborator/futureearthLogo_c.png'],
    ['url' => 'http://edtechnorge.no/det-norske-edtechlandskapet/','img' => 'images/collaborator/edtechLogo.png',      'imgC' => 'images/collaborator/edtechLogo_c.png'],
    ['url' => 'http://www.oslomedtech.no/','img' => 'images/collaborator/oslomedtechLogo.png',      'imgC' => 'images/collaborator/oslomedtechLogo_c.png'],
    ['url' => 'http://www.lteamproductions.com/','img' => 'images/collaborator/lteamproductionsLogo.png',      'imgC' => 'images/collaborator/lteamproductionsLogo_c.png'],
];
} ?>

<h3 style="text-align: center;">WE COLLABORATORS</h3>

<div id='wecollaborators'>
<?php
foreach (find_all_collaborators() as $collaborator) {
  echo "<div class='collaborator'>";
  echo "<a href='" . $collaborator['url'] . "' target='_blank'>";
    echo "<img src='" . $collaborator['img'] . "'";
    echo "onmouseover='src=\"" . $collaborator['imgC'] . "\"'";
    echo "onmouseout='src=\"" . $collaborator['img'] . "\"'>";
    echo "</a>  </div>\n";
}
?>
</div>
<div id='collabrateJoin' class="buttonBar">
  <a href="https://wefoundation.typeform.com/to/eDMXH0" class="buttonWithBorder">Collaborate</a>
  <a href="http://worldef.com/donate/" class="buttonWithBorder">Donate</a>
</div>
