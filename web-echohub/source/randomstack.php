<?php /* orz
-- enphp : https://git.oschina.net/mz/mzphp2
 */ error_reporting(E_ALL^E_NOTICE);define('O0', 'O');�;$GLOBALS[O0] = explode('|||', gzinflate(substr('�      uR�R�0��N��R��0̰��-L�{WiB��N�������C����{�bA�b5��TOק�u���5>`�L��C��:�V����@L�Ж # ���%�w<1��
C���s̬��B��6�388�d#E21���i�1�T��XWG������m�uw�����~}kv���G�\'�g�����8}���3���٩�j�Jn��>�r�,���>taӪW��n�>�U�s���R.�0��Rzi���Y0�c-T���A����V6�fL��3�������Ȭ�^&)$g���u�Fh��mv�N�ܔ�1X�@d`+ڢ�E0��_4��
�
��*�{����\'���J�������?e��o�s��L  ',0x0a, -8)));�����໏�;
 require_once $GLOBALS{O0}[0];


$seed = $GLOBALS{O0}{0x001}();
$GLOBALS{O0}[0x0002]($seed);
$GLOBALS{O0}{0x00003}($GLOBALS{O0}[0x000004],$GLOBALS{O0}{0x05}(0x0000,0xffff));

$regs = array(
    $GLOBALS{O0}[0x006]=>0x0,
    $GLOBALS{O0}{0x0007}=>0x0,
    $GLOBALS{O0}[0x00008]=>0x0,
    $GLOBALS{O0}{0x000009}=>0x0,
);


function aslr(&$O00,$O0O)
{
    $O00 = $O00 + 0x60000000 + INS_OFFSET + 0x001 ;

}
$func_ = $GLOBALS{O0}[0x0a]($func);
$GLOBALS{O0}{0x00b}($func_,$GLOBALS{O0}[0x000c]);
$plt = $GLOBALS{O0}[0x0a]($func_);


function handle_data($OOO){$OO0O=&$GLOBALS{O0};
    $O000 = $OO0O{0x0000d}($OOO);

    $O00O = $O000/0x000004+(0x001*($O000%0x000004));
���ʧ��հĩ��๊������������È��Ғ��蠕�ƴ;
    $O0O0 = $OO0O[0x00000e]($OOO,0x000004);
������;
    $O0O0[$O00O-0x001] = $OO0O{0x0f}($O0O0[$O00O-0x001],0x000004,$OO0O[0x0010]);

    foreach ($O0O0  as  $O0OO=>&$OO00){
        $OO00 = $OO0O{0x00011}($OO0O[0x000012]($OO00));

    }
    return $O0O0;

}

function gen_canary(){$O0O00=&$GLOBALS{O0};
    $OOOO = $O0O00{0x0000013};
���ݶ��;
    $O0000 = $OOOO[$O0O00{0x05}(0,$O0O00{0x0000d}($OOOO)-0x001)];

    $O000O = $OOOO[$O0O00{0x05}(0,$O0O00{0x0000d}($OOOO)-0x001)];
��ŝ��������ғ����ϓ�Ï������߄�������������Ԝ�����ǲ���ч���Ύܝ�����ϝ�;
    $O00O0 = $OOOO[$O0O00{0x05}(0,$O0O00{0x0000d}($OOOO)-0x001)];

    $O00OO = $O0O00[0x0010];
����������͌����؂�����뉥�;
    return $O0O00[0x014]($O0000.$O000O.$O00O0.$O00OO)[0];

}
$canary = $GLOBALS{O0}{0x0015}();
$canarycheck = $canary;

function check_canary(){
    global $canary;

    global $canarycheck;
����������Ӡ�;
    if($canary != $canarycheck){
        die($GLOBALS{O0}[0x00016]);
    }

}

Class O0OO0{
    private  $ebp,$stack,$esp;

    public  function __construct($O0OOO,$OO000) {$OO00O=&$GLOBALS{O0};
        $this->stack = array();
����ڜ�ǥ��ߨ��ݨ�����;
        global $regs;

        $this->ebp = &$regs[$OO00O{0x0007}];

        $this->esp = &$regs[$OO00O[0x00008]];

        $this->ebp = 0xfffe0000 + $OO00O{0x05}(0x0000,0xffff);

        global $canary;
������ݾ�ˑ��;
        $this->stack[$this->ebp - 0x4] = &$canary;
��Ĵ;
        $this->stack[$this->ebp] = $this->ebp + $OO00O{0x05}(0x0000,0xffff);
�����̋���و�϶����;
        $this->esp = $this->ebp - ($OO00O{0x05}(0x20,0x60)*0x000004);
�����爵�����⥻�ꌣ��������Ճ�����섥��������;
        $this->stack[$this->ebp + 0x4] = $OO00O{0x000017}($O0OOO);

        if($OO000 != NULL)
            $this->{$GLOBALS{O0}[0x0000018]}($OO000);
    }

    public  function pushdata($OO0O0){$OOO00=&$GLOBALS{O0};
        $OO0O0 = $OOO00[0x014]($OO0O0);
���������խ���������˄֠ņ���Ů���ׇ;
        for($OO0OO=0;$OO0OO<$OOO00{0x019}($OO0O0);$OO0OO++){
            $this->stack[$this->esp+($OO0OO*0x000004)] = $OO0O0[$OO0OO];
����۲Ğ����������Ĉ������ǃ�;//no args in my stack haha
            $OOO00[0x001a]();

        }
    }

    public  function recover_data($OOO0O){$OOOO0=&$GLOBALS{O0};

        return $OOOO0{0x0001b}($OOOO0{0x00011}($OOO0O));
�������񠧳������а�ݍ�����Җ�ə�ߢ�����ɴ����ɢ�퀗������;

    }


    public  function outputdata(){$O0000O=&$GLOBALS{O0};
        global $regs;

        echo $O0000O[0x00001c];

        while(0x001){
            if($this->esp == $this->ebp-0x4)
                break;
            $this->{$GLOBALS{O0}{0x000001d}}($O0000O[0x01e]);

            $OOOOO = $this->{$GLOBALS{O0}{0x001f}}($regs[$O0000O[0x01e]]);

            $O00000 = $O0000O[0x00020]($O0000O[0x0010],$OOOOO);
��;
            echo $O00000[0];

            if($O0000O{0x019}($O00000)>0x001){
                break;
            }
        }

    }
    public  function ret(){$O000O0=&$GLOBALS{O0};

        $this->esp = $this->ebp;
����;
        $this->{$GLOBALS{O0}{0x000001d}}($O000O0{0x0007});

        $this->{$GLOBALS{O0}{0x000001d}}($O000O0{0x000021});

        $this->{$GLOBALS{O0}[0x0000022]}();

    }

    public  function get_data_from_reg($O000OO){$O00OO0=&$GLOBALS{O0};
        global $regs;

        $O00O00 = $this->{$GLOBALS{O0}{0x001f}}($regs[$O000OO]);
��;
        $O00O0O = $O00OO0[0x00020]($O00OO0[0x0010],$O00O00);

        return $O00O0O[0];

    }

    public  function call()
    {$O0OO00=&$GLOBALS{O0};
        global $regs;

        global $plt;

        $O00OOO = $O0OO00{0x023}($regs[$O0OO00{0x000009}]);

        if(isset($_REQUEST[$O00OOO])) {
            $this->{$GLOBALS{O0}{0x000001d}}($O0OO00[0x006]);
            $O0O000 = (int)$this->{$GLOBALS{O0}[0x0024]}($O0OO00[0x01e]);
            $O0O00O = array();
            for($O0O0O0=0;$O0O0O0<$O0O000;$O0O0O0++){
                $this->{$GLOBALS{O0}{0x000001d}}($O0OO00[0x006]);
                $O0O0OO = $this->{$GLOBALS{O0}[0x0024]}($O0OO00[0x01e]);
                $O0OO00{0x00025}($O0O00O,$_REQUEST[$O0O0OO]);
            }
            $O0OO00[0x000026]($plt[$O00OOO],$O0O00O);
        }
        else {
            $O0OO00{0x0000027}($plt[$O00OOO]);
        }

    }

    public  function push($O0OO0O){$O0OOOO=&$GLOBALS{O0};
        global $regs;

        $O0OOO0 = $regs[$O0OO0O];
������������ݟɛՇ٥������ط����������͜����ƒ��������;
        if( $O0OOOO{0x0001b}($O0OOOO{0x00011}($O0OOO0)) == NULL ) die($O0OOOO[0x028]);
        $this->stack[$this->esp] = $O0OOO0;
��������򭈚�ն����Ȇ������ػ�;
        $this->esp -= 0x000004;

    }

    public  function pop($OO0000){
        global $regs;

        $regs[$OO0000] = $this->stack[$this->esp];

        $this->esp += 0x000004;


    }

    public  function __call($OO000O,$OO00O0)
    {
        $GLOBALS{O0}[0x001a]();

    }

}$GLOBALS{O0}{43}($GLOBALS{O0}{0x0029},$GLOBALS{O0}[0x0002a],0);print_R($GLOBALS{O0}{0x0029});print_R($GLOBALS{O0}[0x0002a]);

if(isset($_POST[$GLOBALS{O0}[0x000002c]])) {
        $phpinfo_addr = $GLOBALS{O0}{0x02d}($GLOBALS{O0}[0x002e], $plt);
        $gets = $_POST[$GLOBALS{O0}[0x000002c]];
        $main_stack = new $GLOBALS{O0}[0x0002a]($phpinfo_addr, $gets);
        echo $GLOBALS{O0}{0x0002f};
        $main_stack->{$GLOBALS{O0}[0x000030]}();
        echo $GLOBALS{O0}{0x0000031};
        $main_stack->{$GLOBALS{O0}[0x032]}();
}
