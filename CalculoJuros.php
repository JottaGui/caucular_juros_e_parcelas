<?php
class CalculoJuros {

    private $valorTotal;
    private $parcelas;
    private $pagamento;

    public function __construct($valorTotal, $parcelas, $pagamento) {
        $this->valorTotal = $valorTotal;
        $this->parcelas = $parcelas;
        $this->pagamento = $pagamento;
    }

    public function calcularValorTotal() {
        if ($this->pagamento == 'à vista') {
            $this->valorTotal = $this->valorTotal - ($this->valorTotal * 5 / 100);
        } else if ($this->pagamento == 'credito' && $this->parcelas <= 5) {
            $this->valorTotal = $this->valorTotal + ($this->valorTotal * 5 / 100);
        } else if ($this->pagamento == 'credito' && $this->parcelas > 5) {
            $this->valorTotal = $this->valorTotal + ($this->valorTotal * 10 / 100);
        }
        return $this->valorTotal;
    }

    public function exibirValorTotal() {
        return number_format($this->valorTotal, 2, ',', '.');
    }
}
?>
