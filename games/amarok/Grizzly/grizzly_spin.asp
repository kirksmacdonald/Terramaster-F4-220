<?php

if (eregi("grizzly_spin\.asp$", strtolower(__FILE__))===false) {
  print_var("t_alert1", "Fuck you self, my darling!");
  print_var("error", "1");
  die();
}

header("Expires: ".gmdate("D, d M Y H:i:s")."GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

define("_GAME_NAME", "Grizzly");

//include("./common.php");
include_once("../core/engine.php");

trace_str("__FILE__");

if (is_user()) {

    trace_var($_POST, "POST");
    trace_var($_GET, "GET");



    # �������� ������� ������� ����� �������
    # ���� ���� ������ �� ������ ��� ������� ��� ������)))
    # � ���� ���, �� ����� ����� ������� � ����������� ��������)
    $must_hold=false;
    if (isset($_POST['coins'])) {
      if ($_POST['coins']==1) {
        $must_hold=false;
      } elseif ($_POST['coins']==2) {
        $must_hold=true;
      } else {
        # ���� ����� ������� �������� ����������, �� ��� ��� �����.
        print_var("error", "5");
        die();
      }
    } else {
      # ���� ����� �� �������, �� ��� �����.
      print_var("error", "5");
      die();
    }

    if ((!is_bank($game_configs['game_bank'])) OR (!is_bank($game_configs['profit_bank']))) {
      # ���� ����� �� ����������, �� ��� ������ � �� � ������ �� ������ �� �����.
      print_var("error", "5");
      die();
    }

    $bet=$_POST['coins']*$game_configs['coinsize'];

    # ������ ��������, ��� ������������ ������������� �����
    $_SESSION['Grizzly_ratio']=18;


    if (user_balance()<$bet) {
      # ���� ����� ����, �� ����� ��� ��� ���������� ��������?))))
      print_var("error", "1");
      die();
    }


    # ��������� ���������� ����������
    # 0 - �������
	# 1 - �������
	# 2 - ��������
	# 3 - �������
	# 4 - ����
	# 5 - ������
	# 6 - �������
	# 7 - ����� ���������
	# icons - ������� ���������� �� ��������� ��� ����� ����� �����(������ ������� ��� �������������� �� �����)
	# wins - ������� � �������, ������� ������ ���������������� � �������)
	$wildchar=7;  # ����� ����� �����)
    $winmaps=array(
        array(
          'icons' => array(7),  # �����
          'wins' =>  1000,
        ),
        array(
          'icons' => array(1),  # �������
          'wins' =>  10,
        ),
        array(
          'icons' => array(2),  # ��������
          'wins' =>  20,
        ),
        array(
          'icons' => array(3),  # �������
          'wins' =>  50,
        ),
        array(
          'icons' => array(4),  # ����
          'wins' =>  75,
        ),
        array(
          'icons' => array(5),  # ������
          'wins' =>  100,
        ),
        array(
          'icons' => array(6),  # �������
          'wins' =>  200,
        ),
        array(
          'icons' => array(1,2,3), # ����� �������
          'wins' => 4,
        ),
        array(
          'icons' => array(4,5,6), # ������� �������
          'wins' => 25,
        ),
    );

    # ����� ��������� ���������� ������ ��������
    # ����, � �� ������ ��� ������� ����
    # ��� ����������� ������������ ������� ���� � ���������� ������� ��������� ���������))))
    # 0 - �������
	# 1 - �������
	# 2 - ��������
	# 3 - �������
	# 4 - ����
	# 5 - ������
	# 6 - �������
	# 7 - ����� ���������
	# ������:
	# 1 - ������ ������
	# 2 - ������ ��������
	# 3 - ������ � ������� ��������
	# 4 - ������� � ������� ��������
	# 5 - ������� ��������
	# 6 - ����� ������� ��������
	switch ($game_configs['profile']) {
	  default:
      case 1:
      $avalible=array(0,0,0,1,1,1,2,2,2,3,3,3,4,4,4,5,5,5,6,6,6,7,7,7);
      break;

	  case 2:
      $avalible=array(0,0,0,7,1,1,1,2,2,2,3,3,3,4,4,4,7);
      break;

      case 3:
      $avalible=array(0,0,0,7,1,1,1,2,2,2,3,3,3,4,5,6,1,1,2,3,4,5);
      break;

      case 4:
      $avalible=array(0,0,0,7,7,7,6,6,6,5,5,5,4,4,4,1,2,3,6,7,5);
      break;

      case 5:
      $avalible=array(0,0,0,7,7,6,6,6,5,5,5,4,4,4,5,6,4);
      break;

      case 6:
      $avalible=array(0,0,0,7,7,7,1,2,3,4,0,0,1,2,6,5,4,6,5,4,6,5,4,7,7,7,7,7,7,7,7,7,7,7,7,7);
      break;
   }

    # ������� ������ �����
    //$bank=bank_balance($game_configs['game_bank']);
	$bank=Game::bankBalance();

    if ($must_hold) {
      for ($i=0; $i<50; $i++) {
        $map=generate_map ($avalible);
        $win=calculate_win ($map);
        if (($win*$game_configs['coinsize']<=$bank/$_SESSION['Grizzly_ratio']) AND (chance($game_configs['win_chance']))) {
          break;
        }
      }
      unset($_SESSION['Grizzly_map']);
      unset($_SESSION['Grizzly_avalible']);
      $_SESSION['Grizzly_map']=$map;
      $_SESSION['Grizzly_avalible']=$avalible;
    } else {
      for ($i=0; $i<50; $i++) {
        $map=generate_map ($avalible);
        $win=calculate_win ($map);
        if (($win*$game_configs['coinsize']<=$bank/$_SESSION['Grizzly_ratio']) AND (chance($game_configs['win_chance']))) {
          break;
        }
      }
    }

    # ������� ��������, ������ ���������� � ��)))
    if (!$must_hold) {
      $winall=$win*$game_configs['coinsize'];
      if ($winall>0) {
        #������� ������
        user_pay($bet);
        bank_add($game_configs['game_bank'], $bet);
        #��������� �������
        user_add($winall);
        bank_pay($game_configs['game_bank'], $winall);
      } else {
        user_pay($bet);
        $profit=$bet/100;
        $profit=$profit*$game_configs['percent'];
        bank_add($game_configs['game_bank'], $bet-$profit);
        bank_add($game_configs['profit_bank'], $profit);
      }
      write_stat ($bet, $winall);
    }

    trace_var($map, "map");
    trace_var($win, "win");
    # ������������ �������� �� ������
	# 1 4 7
	# 2 5 8
	# 3 6 9

    # ������ �������
	if ($map[0]==0) {
	  print_var("symb1", mt_rand(1, 7));
	  print_var("symb2", "0");
	  print_var("symb3", mt_rand(1, 7));
	} else {
      print_var("symb1", "0");
	  print_var("symb2", $map[0]);
	  print_var("symb3", "0");
	}

	# ������ �������
	if ($map[1]==0) {
	  print_var("symb4", mt_rand(1, 7));
	  print_var("symb5", "0");
	  print_var("symb6", mt_rand(1, 7));
	} else {
      print_var("symb4", "0");
	  print_var("symb5", $map[1]);
	  print_var("symb6", "0");
	}

	# ������ �������
	if ($map[2]==0) {
	  print_var("symb7", mt_rand(1, 7));
	  print_var("symb8", "0");
	  print_var("symb9", mt_rand(1, 7));
	} else {
      print_var("symb7", "0");
	  print_var("symb8", $map[2]);
	  print_var("symb9", "0");
	}

	# ������, ��� ������ ������� ���� ��� ��������� ��������� ������������ ������ ��� �� PHP

    # ���� �� ������������ ��������� ��� ��������, �� ������� ������� �� �������, ������� ������)))
    if ($must_hold) {
	  print_var("allow_hold", "1"); # ���� ��������� ����������� �������
	  print_var("win1", "0");
	  print_var("totalwin", "0");
    } else {
      print_var("win1", $win);
	  print_var("totalwin", $win);
	  print_var("allow_hold", "0");
    }
    print_var("win2", "0");
	print_var("betamount", "0");
	print_var("credit", user_balance());
	//print_var("data_ok=true";
} else {
  print_var("error", "2");
}

print_var("Transfert_OK", "1");





# ������� ����

# ���������� ��������
function calculate_win ($map) {
     global $wildchar, $winmaps;
  if (is_array($map)) {
    foreach ($winmaps as $win) {
      $first=false;
      $second=false;
      $third=false;
      if ((array_search($map[0], $win['icons'])!==false) OR ($map[0]==$wildchar)) {
        $first=true;
      }
      if ((array_search($map[1], $win['icons'])!==false) OR ($map[1]==$wildchar)) {
        $second=true;
      }
      if ((array_search($map[2], $win['icons'])!==false) OR ($map[2]==$wildchar)) {
        $third=true;
      }

      if (($first) AND (($second) AND ($third))) {
        return $win['wins'];
      }
    }
    return 0.00;
  } else {
    return false;
  }
}



# ��������� ��������� �� ������
function generate_map ($avalible) {
  # ���������
  $result=array(0,0,0);

  # �������������� ������
  for ($i=mt_rand(0, 8); $i<10; $i++) {
    shuffle($avalible);
  }

  # ������������ ������������ ��������
  $result[0]=$avalible[mt_rand(0, count($avalible)-1)];
  $result[1]=$avalible[mt_rand(0, count($avalible)-1)];
  $result[2]=$avalible[mt_rand(0, count($avalible)-1)];

  return $result;
}

# ��������� ������ ������� �� ������
function generate_bar ($avalible) {
  # ���������
  $result=0;

  # �������������� ������
  for ($i=mt_rand(0, 8); $i<10; $i++) {
    shuffle($avalible);
  }

  # ������������ ������������� �������
  $result=$avalible[mt_rand(0, count($avalible)-1)];

  return $result;
}