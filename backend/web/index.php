<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// 自动引入vendor里边的类库
require __DIR__ . '/../../vendor/autoload.php';

//引入yii2核心类
/**
 * 引入yii2的类自动加载功能
 * Yii::$classMaps = require classes.php
 * Yii::$container = 注册一个容器
 *
 * BaseYii.php核心方法
 *  register()
 *  setAlias()/getAlias()/getRootAlias()
 *
 *  configure()/createObject()
 *  debug()/beginProfile()相关
 *  getVersion()
 *
 */
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';

// 设置项目别名（公用设置）
require __DIR__ . '/../../common/config/bootstrap.php';


// 保留文件，启动设置（当前模块特有设置），有需要可以在这里定义常量等
require __DIR__ . '/../config/bootstrap.php';

// 获取配置项。 如果配置了**-local.php,会覆盖掉main.php
$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../../common/config/main-local.php',
    require __DIR__ . '/../config/main.php',
    require __DIR__ . '/../config/main-local.php'
);

// 初始化
/**
 * web/Application->base/Application -> Module -> ServiceLocator -> Component -> BaseObject -> Configurable
 * run() 请求前->处理请求->请求后->返回
 *  如果配置的有catchAll()，可以用于网站所有请求拦截，进行通知。比如维护
 *
 *  base/Application
 *  核心方法
 *      __construct()
 *      preInit()
 *      init()
 *      bootstrap()
 *      registerErrorHandler()
 *      getUniqueId()
 *      setBasePath()
 *      run()
 *      handlerRequest()
 *      coreComponents()
 *      end()
 *      setContainer()
 *
 *      get/setVendorPath()
 *      get/setRuntimePath()
 *      get/setTimeZone()
 *      getDb()/getCache()/getErrorHandler()/
 *      getLogger()/getFormatter()/getResponse()
 *      getView()/getUrlManager()/getI18N()/getMail()/getAssetManager()/getAuthManager()
 *      getSecurity()
 *
 *  Module
 *  核心方法
 *      getInstance()/setInstance()/init()
 *      getUniqueId()
 *      getBasePath()/setBasePath()
 *      getViewPath()/setViewPath()
 *      getLayoutPath()/setLayoutPath()
 *      getVersion()/setVersion()/defaultVersion()
 *      getController()
 *      setAliases()
 *      getModule()/setModule()/hasModule()/getModules()/hasModules()
 *      beforeAction()/runAction()/AfterAction()
 *      createController()
 *      get()/has()
 *      isIncorrectClassNameOrPrefix()
 *
 *  ServiceLocator核心方法
 * @var _components/_definitions()
 *      getComponents()/setComponents()
 *      __isset()/__get()
 *      has()/get()/set()/clear()
 *
 *  Component方法
 * @properties $_events/$_eventWildcards()/$_behaviors
 *      __get()/__set()/__isset()/__unset()/__call()/__clone()
 *      hasProperty()/canGetProperty()/canSetProperty()/hasMethod()
 *      behaviors()/getBehavior()/getBehaviors()
 *      hasEventHandlers()
 *      on()/off()/trigger()/
 *      attachBehavior()/detachBehavior()/detachBehaviors()/attachBehaviors()
 *      ensureBehaviors()/attachBehaviorInternal()
 *
 *  BaseObject
 * @property $className string
 *      __construct()
 *      init()
 *      __get()/__set()/__isset()/__unset()/__call()
 *      hasProperty()/getProperty()/canSetProperty()/canGetProperty()
 *      hasMethod()
 * 
 * interface Configurable
 */
(new yii\web\Application($config))->run();
