<h1>関連障害検知抑制</h1>


<?php html_print_image("images/help/cascade_protection_ilustration.png", false); ?>
<br>
<p>
このオプションは、あるエージェントの障害により他のエージェントの状態が確認できなくなった時に、大量のアラートが上がるのを避けるために利用します。
たとえば、途中のルータがダウンしたことにより、その先の機器が実際には正常稼働していたとしても疎通が取れなくなったような場合です。
何も設定を行わないと、Pandora FMS は ICMP(ping)疎通確認を実施し、疎通が取れなくなった全てのエージェントをダウン状態と認識します。
<br><br>
<i>関連障害検知抑制</i>を有効にすると、いずれかの親のエージェントで「障害」アラートが上がった場合は、その配下のエージェントではアラートは上がらなくなります。
親エージェントが「障害」状態よりレベルの低いアラート状態の場合は、配下のエージェントのアラートも上がります。
関連障害検知抑制では、親エージェントの「障害」状態との相関関係をチェックします。
<br><br>
もし、より複雑な関連障害検知抑制設定を行いたい場合は、親エージェントのアラートの関連付けを行い、子エージェントで関連障害検知抑制設定を行います。
</p>
