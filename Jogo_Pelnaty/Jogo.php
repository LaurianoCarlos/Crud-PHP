<?php
require_once "Usuario.php";
require_once "Animacao.php";

class Jogo
{
    protected $goleiro = -1;
    protected $placarJogador = 0;
    protected $placarGoleiro = 0;
    protected $gol = false;
    protected $jogarNovamente = "S";

    protected function nome()
    {
        echo "Insira seu nome: ";
        $nome = readLine();
        return $nome;
    }
    protected function escolherCanto()
    {
        echo "\n";
        echo "ESCOLHA UM CANTO!!!\n";

        echo "IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII\n";
        echo "II                              II\n";
        echo "II  1                        4  II\n";
        echo "II                              II\n";
        echo "II              3               II\n";
        echo "II                              II\n";
        echo "II  2                        5  II\n";
        echo "II                              II \n";

        echo "[1] Superior esquerdo \n[2] Inferior esquerdo \n[3] Meio \n[4] Superior Direito \n[5] Inferior Direito\n";
        echo "Opcao: ";
        $canto = readLine();
        return $canto;
    }

    protected function exibirGol($gol)
    {
        if ($gol == true) {
            echo "GOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOLLL\n\n";
        } else {
            echo "DEFEEEEEEEEEEEEEENDEEEEEEEUUUUUUUU\n\n";
        }
    }
    protected function escolherNivel()
    {
        echo "\n";
        echo "DIFICULDADE:\n";
        echo "[1] FÁCIL\n[2] MÉDIO\n[3] DIFÍCIL\n";
        echo "Escolha uma dificuldade (Insira número): ";
        $nivel = readLine();

        return $nivel;
    }

    protected function nivel($nivel, $cantoSelecionado, $goleiro)
    {
        $numero = [1, 2, 3, 4, 5];

        switch ($nivel) {
            case 1:
                for ($c = 0; $c <= 0; $c++) {
                    $numero[$c] = rand(1, 5);
                    if ($cantoSelecionado == $numero[$c]) {
                        $goleiro = $numero[$c];
                    }
                }
                break;

            case 2:
                for ($c = 0; $c <= $nivel - 1; $c++) {
                    $numero[$c] = rand(1, 5);
                    if ($cantoSelecionado == $numero[$c]) {
                        $goleiro = $numero[$c];
                    }
                }
                break;

            case 3:
                for ($c = 0; $c <= $nivel - 1; $c++) {
                    $numero[$c] = rand(1, 5);
                    if ($cantoSelecionado == $numero[$c]) {
                        $goleiro = $numero[$c];
                    }
                }
                break;
            default:
                echo "Erro... Reinicie o jogo!";
                break;
        }
        return $goleiro;
    }

    protected function verificarGol($goleiro, $cantoSelecionado)
    {
        $gol = true;

        if ($goleiro == $$cantoSelecionado) {
            $gol = false;
        }

        return $gol;
    }

    public function modoSolo(): void
    {
        //Animacao::inicializacaoModoSolo();

        $usuario = new Usuario($this->nome());
      
        do {
            $usuario->setNivel($this->escolherNivel());

            if ($usuario->getNivel() > 3 || $usuario->getNivel() < 1) {
                echo "Opcão Inválida\n";
            }
          
           do{

             
             } while ($usuario->getNivel() > 3 || $usuario->getNivel() < 1);

        
            do {
                $usuario->setCantoSelecionado($this->escolherCanto());

                if (
                    $usuario->getCantoSelecionado() > 5 ||
                    $usuario->getCantoSelecionado() < 1
                ) {
                    echo "Opcão Inválida\n";
                }
            } while (
                $usuario->getCantoSelecionado() > 5 ||
                $usuario->getCantoSelecionado() < 1
            );

            $this->goleiro = $this->nivel($usuario->getNivel(), $usuario->getCantoSelecionado(),1);

            $this->gol = $this->verificarGol($this->goleiro,$usuario->getCantoSelecionado());

            $this->exibirGol($gol);

            if ($this->gol == true) {
                $this->placarJogador++;
            } else {
                $this->placarGoleiro++;
            }

          echo $usuario->getNome() ." " .$this->placarJogador . " x " ." " .$this->placarGoleiro." Goleiro\n";

          echo "Você chutou no: " .$usuario->getCantoSelecionado() ." Goleiro pulou: " .$this->goleiro. "\n";

          if($this->placarGoleiro >= 5){
            break;
          }
          if($this->placarJogador >= 5){
            break;
          }

          echo "Deseja continuar? ";
          $this->JogarNovamente = readLine();
        }while(!(strcasecmp("s", $this->jogarNovamente) == 0));
    }
}
$jogo = new Jogo();
$jogo->modoSolo();
