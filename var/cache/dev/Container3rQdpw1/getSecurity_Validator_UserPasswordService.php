<?php

namespace Container3rQdpw1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Validator_UserPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $container->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')));
    }
}
