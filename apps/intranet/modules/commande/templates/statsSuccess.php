<?php use_helper('I18N', 'Date') ?>
<?php use_stylesheet('print.css', '', array('media' => 'print')) ?>
<?php if ($print): ?>
<?php use_stylesheet('print.css?htmlmode') ?>
<style type="text/css">
    #wrapper {
        width: 1300px;
    }
</style>
<script type="text/javascript">
    javascript:window.print();
</script>
<?php endif; ?>
  <div class="productName">
    <span>Statistiques<?php if($hasDate): ?> du <?php echo format_date($from) ?> au <?php echo format_date($to) ?><?php endif; ?></span>
    <div class="actions">
		<a href="<?php echo url_for('@commande') ?>">Retour à la liste</a>
		<a target="_blank" href="<?php echo url_for('commande/stats') ?>?print=1">Imprimer</a>
	</div>
  </div>
  <div id="rapport">
  	<table class="tableNm" border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-bottom: 10px;">
			<tr>
				<th colspan="8"></th>
				<th>Métrage</th>
				<th>%</th>
				<th>Montant(€)</th>
				<th>%</th>
				<th>Montant($)</th>
				<th>%</th>
				<th>Com.&nbsp;NM(€)</th>
				<th>%</th>
				<th>Com.&nbsp;NM($)</th>
				<th>%</th>
				<th>Com.&nbsp;CC(€)</th>
				<th>Com.&nbsp;CC($)</th>
			</tr>
  			<tr class="statTotal">
  				<td colspan="8"><strong>Total cumulé de la période</strong> du <?php echo $fromN0->format('d/m/Y') ?> au <?php echo $toN0->format('d/m/Y') ?></td>
  				<td><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($n['STATS']))? number_format(round($n['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
  			<tr class="statTotal ligneMarine">
  				<td colspan="8"><strong>Total cumulé N-1 de la période</strong> du <?php echo $fromN1->format('d/m/Y') ?> au <?php echo $toN1->format('d/m/Y') ?></td>
  				<td><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n1['STATS']) && isset($n['STATS']) && $n['STATS']['metrage'] > 0 && $n1['STATS']['metrage'] > 0): ?>
					<?php $diff = $n['STATS']['metrage'] / $n1['STATS']['metrage']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n1['STATS']) && isset($n['STATS']) && $n['STATS']['montant_eur'] > 0 && $n1['STATS']['montant_eur'] > 0): ?>
					<?php $diff = $n['STATS']['montant_eur'] / $n1['STATS']['montant_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n1['STATS']) && isset($n['STATS']) && $n['STATS']['montant_doll'] > 0 && $n1['STATS']['montant_doll'] > 0): ?>
					<?php $diff = $n['STATS']['montant_doll'] / $n1['STATS']['montant_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n1['STATS']) && isset($n['STATS']) && $n['STATS']['nm_eur'] > 0 && $n1['STATS']['nm_eur'] > 0): ?>
					<?php $diff = $n['STATS']['nm_eur'] / $n1['STATS']['nm_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n1['STATS']) && isset($n['STATS']) && $n['STATS']['nm_doll'] > 0 && $n1['STATS']['nm_doll'] > 0): ?>
					<?php $diff = $n['STATS']['nm_doll'] / $n1['STATS']['nm_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($n1['STATS']))? number_format(round($n1['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
  			<tr class="statTotal ligneJaune">
  				<td colspan="8"><strong>Total cumulé N-2 de la période</strong> du <?php echo $fromN2->format('d/m/Y') ?> au <?php echo $toN2->format('d/m/Y') ?></td>
  				<td><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n2['STATS']) && isset($n['STATS']) && $n['STATS']['metrage'] > 0 && $n2['STATS']['metrage'] > 0): ?>
					<?php $diff = $n['STATS']['metrage'] / $n2['STATS']['metrage']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n2['STATS']) && isset($n['STATS']) && $n['STATS']['montant_eur'] > 0 && $n2['STATS']['montant_eur'] > 0): ?>
					<?php $diff = $n['STATS']['montant_eur'] / $n2['STATS']['montant_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n2['STATS']) && isset($n['STATS']) && $n['STATS']['montant_doll'] > 0 && $n2['STATS']['montant_doll'] > 0): ?>
					<?php $diff = $n['STATS']['montant_doll'] / $n2['STATS']['montant_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n2['STATS']) && isset($n['STATS']) && $n['STATS']['nm_eur'] > 0 && $n2['STATS']['nm_eur'] > 0): ?>
					<?php $diff = $n['STATS']['nm_eur'] / $n2['STATS']['nm_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($n2['STATS']) && isset($n['STATS']) && $n['STATS']['nm_doll'] > 0 && $n2['STATS']['nm_doll'] > 0): ?>
					<?php $diff = $n['STATS']['nm_doll'] / $n2['STATS']['nm_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($n2['STATS']))? number_format(round($n2['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
			<tr class="noThead">
				<th colspan="8"></th>
				<th>Métrage</th>
				<th>%</th>
				<th>Montant(€)</th>
				<th>%</th>
				<th>Montant($)</th>
				<th>%</th>
				<th>Com.&nbsp;NM(€)</th>
				<th>%</th>
				<th>Com.&nbsp;NM($)</th>
				<th>%</th>
				<th>Com.&nbsp;CC(€)</th>
				<th>Com.&nbsp;CC($)</th>
			</tr>
  			<tr class="statTotal">
  				<td colspan="8"><strong>Total cumulé du <?php echo $fromCumul->format('d/m/Y') ?> au <?php echo $toCumul->format('d/m/Y') ?></strong></td>
  				<td><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($cn['STATS']))? number_format(round($cn['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
  			<tr class="statTotal ligneMarine">
  				<td colspan="8"><strong>Total cumulé N-1 du <?php echo $fromCumul1->format('d/m/Y') ?> au <?php echo $toCumul1->format('d/m/Y') ?></strong></td>
  				<td><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn1['STATS']) && isset($cn['STATS']) && $cn['STATS']['metrage'] > 0 && $cn1['STATS']['metrage'] > 0): ?>
					<?php $diff = $cn['STATS']['metrage'] / $cn1['STATS']['metrage']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
  				</td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn1['STATS']) && isset($cn['STATS']) && $cn['STATS']['montant_eur'] > 0 && $cn1['STATS']['montant_eur'] > 0): ?>
					<?php $diff = $cn['STATS']['montant_eur'] / $cn1['STATS']['montant_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
  				</td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn1['STATS']) && isset($cn['STATS']) && $cn['STATS']['montant_doll'] > 0 && $cn1['STATS']['montant_doll'] > 0): ?>
					<?php $diff = $cn['STATS']['montant_doll'] / $cn1['STATS']['montant_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn1['STATS']) && isset($cn['STATS']) && $cn['STATS']['nm_eur'] > 0 && $cn1['STATS']['nm_eur'] > 0): ?>
					<?php $diff = $cn['STATS']['nm_eur'] / $cn1['STATS']['nm_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn1['STATS']) && isset($cn['STATS']) && $cn['STATS']['nm_doll'] > 0 && $cn1['STATS']['nm_doll'] > 0): ?>
					<?php $diff = $cn['STATS']['nm_doll'] / $cn1['STATS']['nm_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($cn1['STATS']))? number_format(round($cn1['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
  			<tr class="statTotal ligneJaune">
  				<td colspan="8"><strong>Total cumulé N-2 du <?php echo $fromCumul2->format('d/m/Y') ?> au <?php echo $toCumul2->format('d/m/Y') ?></strong></td>
  				<td><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['metrage'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn2['STATS']) && isset($cn['STATS']) && $cn['STATS']['metrage'] > 0 && $cn2['STATS']['metrage'] > 0): ?>
					<?php $diff = $cn['STATS']['metrage'] / $cn2['STATS']['metrage']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['montant_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn2['STATS']) && isset($cn['STATS']) && $cn['STATS']['montant_eur'] > 0 && $cn2['STATS']['montant_eur'] > 0): ?>
					<?php $diff = $cn['STATS']['montant_eur'] / $cn2['STATS']['montant_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['montant_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn2['STATS']) && isset($cn['STATS']) && $cn['STATS']['montant_doll'] > 0 && $cn2['STATS']['montant_doll'] > 0): ?>
					<?php $diff = $cn['STATS']['montant_doll'] / $cn2['STATS']['montant_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['nm_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn2['STATS']) && isset($cn['STATS']) && $cn['STATS']['nm_eur'] > 0 && $cn2['STATS']['nm_eur'] > 0): ?>
					<?php $diff = $cn['STATS']['nm_eur'] / $cn2['STATS']['nm_eur']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['nm_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right">
					<?php if (isset($cn2['STATS']) && isset($cn['STATS']) && $cn['STATS']['nm_doll'] > 0 && $cn2['STATS']['nm_doll'] > 0): ?>
					<?php $diff = $cn['STATS']['nm_doll'] / $cn2['STATS']['nm_doll']; ?>
					<?php if ($diff > 1): ?>
						<span class="pos percent">+<?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php else: ?>
						<span class="neg percent"><?php echo number_format(($diff - 1) * 100, 0, '.', '&nbsp;') ?>%</span>
					<?php endif; ?>
					<?php endif; ?>
				</td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['cc_eur'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  				<td align="right"><strong><?php echo (isset($cn2['STATS']))? number_format(round($cn2['STATS']['cc_doll'], 2), 2, '.', '&nbsp;') : 0; ?></strong></td>
  			</tr>
  			
  	</table>
  </div>
