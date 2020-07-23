<!DOCTYPE html> 
<html> 
<head> 
	<title>BudgetBetter</title> 
	<style> 
		div { 
			font-size: 22px; 
		} 
	</style> 
</head> 
<body> 
	<div> 
		<?php
			if(DB::connection()->getPdo()) 
			{ 
				echo "Successfully connected to the database => " 
							.DB::connection()->getDatabaseName(); 
			} 
		?> 
	</div> 
</body> 
</html> 
<?php /**PATH /Users/mikael/Documents/GitHub/budget-better/BudgetBetter/resources/views/gfg.blade.php ENDPATH**/ ?>