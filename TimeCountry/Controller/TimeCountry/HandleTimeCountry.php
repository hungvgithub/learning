<?php
declare(strict_types=1);

namespace Sosc\TimeCountry\Controller\TimeCountry;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;

/**
 * Controller HandleTimeCountry
 */
class HandleTimeCountry implements HttpPostActionInterface, HttpGetActionInterface
{
    /**
     * @var ResultFactory
     */
    protected ResultFactory $resultFactory;

    /**
     * @var RequestInterface
     */
    protected RequestInterface $request;

    /**
     * @var array
     */
    protected $arrayNameCountry;

    /**
     * @param ResultFactory $resultFactory
     * @param RequestInterface $request
     * @param array $arrayNameCountry
     */
    public function __construct(
        ResultFactory $resultFactory,
        RequestInterface $request,
        array $arrayNameCountry = []
    )
    {
        $this->resultFactory = $resultFactory;
        $this->request = $request;
        $this->arrayNameCountry = $arrayNameCountry;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\Result\Json&\Magento\Framework\Controller\ResultInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $country = $this->request->getParam('country', '');
        $countryCode = $this->arrayNameCountry[$country] ?? '';
        $timeCountry = $countryCode ? $countryCode->getTimeCountry() : '';


        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($timeCountry);
    }
}
