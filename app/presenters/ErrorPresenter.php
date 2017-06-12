<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 02.04.2017
 * Time: 15:54
 */
namespace App\Presenters;

use Nette;
use Nette\Application\Responses;
use Tracy\ILogger;


/**
 * Class ErrorPresenter
 * @package App\Presenters
 */
class ErrorPresenter implements Nette\Application\IPresenter
{
	use Nette\SmartObject;

	/** @var ILogger */
	private $logger;


    /**
     * ErrorPresenter constructor.
     * @param ILogger $logger
     */
    public function __construct(ILogger $logger)
	{
		$this->logger = $logger;
	}


	/**
	 * @return Nette\Application\IResponse
	 */
	public function run(Nette\Application\Request $request)
	{
		$e = $request->getParameter('exception');

		if ($e instanceof Nette\Application\BadRequestException) {
			// $this->logger->log("HTTP code {$e->getCode()}: {$e->getMessage()} in {$e->getFile()}:{$e->getLine()}", 'access');
			list($module, , $sep) = Nette\Application\Helpers::splitName($request->getPresenterName());
			return new Responses\ForwardResponse($request->setPresenterName($module . $sep . 'Error4xx'));
		}

		$this->logger->log($e, ILogger::EXCEPTION);
		return new Responses\CallbackResponse(function () {
			require __DIR__ . '/templates/Error/500.phtml';
		});
	}

}
