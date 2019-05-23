<h1>Checkout Transparente Pagseguro</h1>

<h3>Dados Pessoais</h3>
<strong>Nome: </strong><br/>
<input type="text" name="name" /><br/><br/>

<strong>CPF: </strong><br/>
<input type="text" name="cpf" /><br/><br/>

<strong>E-mail: </strong><br/>
<input type="text" name="email" /><br/><br/>

<strong>Senha: </strong><br/>
<input type="password" name="senha" /><br/><br/>

<h3>Informações de Endereço</h3>

<strong>CEP: </strong><br/>
<input type="text" name="cep" /><br/><br/>

<strong>Rua: </strong><br/>
<input type="text" name="rua" /><br/><br/>

<strong>Número: </strong><br/>
<input type="text" name="numero" /><br/><br/>

<strong>Complemento: </strong><br/>
<input type="text" name="complemento" /><br/><br/>

<strong>Bairro: </strong><br/>
<input type="text" name="bairro" /><br/><br/>

<strong>Cidade: </strong><br/>
<input type="text" name="cidade" /><br/><br/>

<strong>Estado: </strong><br/>
<input type="text" name="estado" /><br/><br/>

<h3>Informações de Pagamento</h3>

<strong>Titular do cartão: </strong><br/>
<input type="text" name="cartao_titular" /><br/><br/>

<strong>CPF do Titular do cartão: </strong><br/>
<input type="text" name="cartao_cpf" /><br/><br/>

<strong>Número de cartão: </strong><br/>
<input type="text" name="cartao_numero" /><br/><br/>

<strong>Código de Segurança: </strong><br/>
<input type="text" name="cartao_cvv" /><br/><br/>

<strong>Validade: </strong><br/>
<select name="cartao_mes">
	<?php for($q=1;$q<=12;$q++):?>
		<option><?php echo ($q<10)?'0'.$q:$q;?></option>
	<?php endfor;?>	
</select>
<select name="cartao_ano">
	<?php $ano = intval(date('Y'));?>
	<?php for($q=$ano;$q<=($ano+20);$q++): ?>
		<option><?php echo $q;?></option>
	<?php endfor;?>
</select><br/><br/>

<strong>Parcelas:</strong><br/>
<select name="parc"></select>

<button class="button">Efetuar Compra</button>