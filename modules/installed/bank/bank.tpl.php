<?php

    class bankTemplate extends template {
		
		public $bank = '
		<form action="?page=bank&action=process" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Deposit</div>
						<div class="panel-body">
							<p style="height:54px; line-height:18px;">
								To launder your money so it is safe to deposit in your bank account will cost you 15% of the amount you are going to deposit!
							</p>
							<p>
								<input type="text" class="form-control" value="{deposit}" name="deposit" />
							</p>
							<p class="text-right">
								<button type="submit" class="btn" name="bank" value="deposit">Deposit</button>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading"> Withdraw </div>
						<div class="panel-body">
							<p style="height:54px; line-height:18px;">
								There is no cost to withdraw your money!<br />
							</p>
							<p>
								<input type="text" class="form-control" value="{withdraw}" name="withdraw" />
							</p>
							<p class="text-right">
								<button type="submit" class="btn" name="bank" value="withdraw">Withdraw</button>
							</p>
						</div>
					</div>
				</div>
			</div>
		</form>';
        
    }

?>