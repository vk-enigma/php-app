<?php 
/**
 * Exception view
 * 
 * @var \Exception $exception
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Error - Exception was thrown</title>
    </head>
    
    <body>
        <div>
            <?php echo $exception->getMessage() ?> 
        </div>
            
        <div>
            <p>Stack trace:</p>
        
            <ul>
                <?php foreach ($exception->getTrace() as $trace): ?> 
                    <?php if (isset($trace['file'], $trace['line'])): ?> 
                    <li>
                        In <code><?php echo $trace['file'] ?></code> <br/>
                        on line <?php echo $trace['line'] ?> 
                    </li>
                    <?php endif; ?> 
                <?php endforeach; ?> 
            </ul>
        </div>
    </body>
</html>